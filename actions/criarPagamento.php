<?php

declare(strict_types=1);

require_once '../config/Database.php';

function responderJson(int $status, array $payload): void
{
    http_response_code($status);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($payload);
    exit;
}

function envValue(string $key, string $default = ''): string
{
    $value = getenv($key);

    if ($value !== false && $value !== '') {
        return $value;
    }

    $path = dirname(__DIR__) . '/config/.env';
    if (!is_file($path)) {
        return $default;
    }

    foreach (file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) ?: [] as $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, '#') || !str_contains($line, '=')) {
            continue;
        }

        [$name, $value] = explode('=', $line, 2);
        if (trim($name) === $key) {
            return trim($value, " \t\n\r\0\x0B\"'");
        }
    }

    return $default;
}

function baseUrl(): string
{
    $configured = rtrim(envValue('SITE_URL'), '/');
    if ($configured !== '') {
        return $configured;
    }

    $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (($_SERVER['SERVER_PORT'] ?? '') === '443');
    $scheme = $https ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
    $dir = preg_replace('#/actions$#', '', $dir) ?: '';

    return rtrim($scheme . '://' . $host . $dir, '/');
}

function mercadoPagoRequest(string $path, array $payload, string $accessToken): array
{
    $url = 'https://api.mercadopago.com' . $path;
    $body = json_encode($payload, JSON_UNESCAPED_UNICODE);

    if (!function_exists('curl_init')) {
        $context = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => "Content-Type: application/json\r\nAuthorization: Bearer {$accessToken}\r\n",
                'content' => $body,
                'ignore_errors' => true
            ]
        ]);
        $responseBody = file_get_contents($url, false, $context);
        $statusLine = $http_response_header[0] ?? 'HTTP/1.1 500';
        preg_match('/\s(\d{3})\s/', $statusLine, $matches);
        $status = (int) ($matches[1] ?? 500);
    } else {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $accessToken
            ],
            CURLOPT_POSTFIELDS => $body,
            CURLOPT_TIMEOUT => 30
        ]);
        $responseBody = curl_exec($ch);
        $status = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        curl_close($ch);
    }

    $data = json_decode((string) $responseBody, true);

    if ($status < 200 || $status >= 300 || !is_array($data)) {
        throw new RuntimeException('Mercado Pago recusou a criacao do checkout.');
    }

    return $data;
}

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        responderJson(405, ['sucesso' => false, 'mensagem' => 'Metodo nao permitido.']);
    }

    $input = json_decode(file_get_contents('php://input') ?: '', true);
    if (!is_array($input)) {
        responderJson(400, ['sucesso' => false, 'mensagem' => 'Dados invalidos.']);
    }

    $cliente = $input['cliente'] ?? [];
    $itensRecebidos = $input['itens'] ?? [];
    $formaPagamento = (string) ($input['forma_pagamento'] ?? 'pix');
    $formaPagamento = in_array($formaPagamento, ['pix', 'cartao'], true) ? $formaPagamento : 'pix';

    $nome = trim((string) ($cliente['nome'] ?? ''));
    $email = trim((string) ($cliente['email'] ?? ''));
    $telefone = trim((string) ($cliente['telefone'] ?? ''));
    $cep = trim((string) ($cliente['cep'] ?? ''));
    $endereco = trim((string) ($cliente['endereco'] ?? ''));
    $numero = trim((string) ($cliente['numero'] ?? ''));
    $complemento = trim((string) ($cliente['complemento'] ?? ''));
    $bairro = trim((string) ($cliente['bairro'] ?? ''));
    $cidade = trim((string) ($cliente['cidade'] ?? ''));
    $estado = strtoupper(trim((string) ($cliente['estado'] ?? '')));

    if ($nome === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        responderJson(400, ['sucesso' => false, 'mensagem' => 'Informe nome e e-mail validos.']);
    }

    $cepNumeros = preg_replace('/\D+/', '', $cep);
    if (
        strlen($cepNumeros) !== 8 ||
        $endereco === '' ||
        $numero === '' ||
        $bairro === '' ||
        $cidade === '' ||
        !preg_match('/^[A-Z]{2}$/', $estado)
    ) {
        responderJson(400, ['sucesso' => false, 'mensagem' => 'Informe endereco completo com CEP valido.']);
    }

    if (!is_array($itensRecebidos) || count($itensRecebidos) === 0) {
        responderJson(400, ['sucesso' => false, 'mensagem' => 'Seu carrinho esta vazio.']);
    }

    $itens = [];
    $total = 0.0;

    foreach ($itensRecebidos as $item) {
        if (!is_array($item)) {
            continue;
        }

        $nomeItem = trim((string) ($item['name'] ?? 'Produto Pet & Rabiscos'));
        $categoria = trim((string) ($item['category'] ?? 'Produto'));
        $preco = round((float) ($item['price'] ?? 0), 2);

        if ($nomeItem === '' || $preco <= 0) {
            continue;
        }

        $itens[] = [
            'title' => substr($nomeItem, 0, 250),
            'description' => substr($categoria, 0, 250),
            'quantity' => 1,
            'currency_id' => 'BRL',
            'unit_price' => $preco
        ];
        $total += $preco;
    }

    if (!$itens || $total <= 0) {
        responderJson(400, ['sucesso' => false, 'mensagem' => 'Carrinho sem itens validos.']);
    }

    $accessToken = envValue('MERCADO_PAGO_ACCESS_TOKEN');
    if ($accessToken === '') {
        responderJson(500, ['sucesso' => false, 'mensagem' => 'Configure MERCADO_PAGO_ACCESS_TOKEN no config/.env.']);
    }

    $database = new Database();
    $pdo = $database->conectar();

    $stmt = $pdo->prepare(
        'INSERT INTO pedidos (
            cliente_nome,
            cliente_email,
            cliente_telefone,
            cliente_cep,
            cliente_endereco,
            cliente_numero,
            cliente_complemento,
            cliente_bairro,
            cliente_cidade,
            cliente_estado,
            total,
            status,
            itens_json,
            criado_em
        )
         VALUES (
            :nome,
            :email,
            :telefone,
            :cep,
            :endereco,
            :numero,
            :complemento,
            :bairro,
            :cidade,
            :estado,
            :total,
            :status,
            :itens,
            NOW()
         )'
    );
    $stmt->execute([
        ':nome' => $nome,
        ':email' => $email,
        ':telefone' => $telefone,
        ':cep' => $cepNumeros,
        ':endereco' => $endereco,
        ':numero' => $numero,
        ':complemento' => $complemento,
        ':bairro' => $bairro,
        ':cidade' => $cidade,
        ':estado' => $estado,
        ':total' => $total,
        ':status' => 'aguardando_pagamento',
        ':itens' => json_encode($itensRecebidos, JSON_UNESCAPED_UNICODE)
    ]);
    $pedidoId = (int) $pdo->lastInsertId();

    $baseUrl = baseUrl();
    $paymentMethods = [
        'excluded_payment_types' => [
            ['id' => 'ticket']
        ]
    ];

    if ($formaPagamento === 'pix') {
        $paymentMethods = [
            'excluded_payment_types' => [
                ['id' => 'credit_card'],
                ['id' => 'debit_card'],
                ['id' => 'ticket']
            ]
        ];
    }

    if ($formaPagamento === 'cartao') {
        $paymentMethods = [
            'excluded_payment_types' => [
                ['id' => 'ticket'],
                ['id' => 'bank_transfer']
            ]
        ];
    }

    $preference = [
        'items' => $itens,
        'payer' => [
            'name' => $nome,
            'email' => $email,
            'phone' => [
                'number' => preg_replace('/\D+/', '', $telefone)
            ],
            'address' => [
                'zip_code' => $cepNumeros,
                'street_name' => $endereco,
                'street_number' => $numero
            ]
        ],
        'external_reference' => (string) $pedidoId,
        'statement_descriptor' => 'PET RABISCOS',
        'back_urls' => [
            'success' => $baseUrl . '/actions/retornoPagamento.php?status=success&pedido=' . $pedidoId,
            'failure' => $baseUrl . '/actions/retornoPagamento.php?status=failure&pedido=' . $pedidoId,
            'pending' => $baseUrl . '/actions/retornoPagamento.php?status=pending&pedido=' . $pedidoId
        ],
        'auto_return' => 'approved',
        'notification_url' => $baseUrl . '/actions/webhookMercadoPago.php',
        'payment_methods' => $paymentMethods,
        'metadata' => [
            'pedido_id' => $pedidoId,
            'forma_pagamento' => $formaPagamento,
            'cliente_cep' => $cepNumeros,
            'cliente_bairro' => $bairro,
            'cliente_cidade' => $cidade,
            'cliente_estado' => $estado
        ]
    ];

    $checkout = mercadoPagoRequest('/checkout/preferences', $preference, $accessToken);

    $stmt = $pdo->prepare(
        'UPDATE pedidos
         SET mercado_pago_preference_id = :preference_id, checkout_url = :checkout_url
         WHERE id = :id'
    );
    $stmt->execute([
        ':preference_id' => (string) ($checkout['id'] ?? ''),
        ':checkout_url' => (string) ($checkout['init_point'] ?? ''),
        ':id' => $pedidoId
    ]);

    responderJson(201, [
        'sucesso' => true,
        'pedido_id' => $pedidoId,
        'checkout_url' => $checkout['init_point'] ?? '',
        'sandbox_url' => $checkout['sandbox_init_point'] ?? ''
    ]);
} catch (Throwable $erro) {
    error_log('Erro ao criar pagamento Mercado Pago: ' . $erro->getMessage());
    responderJson(500, ['sucesso' => false, 'mensagem' => 'Nao foi possivel iniciar o pagamento.']);
}
