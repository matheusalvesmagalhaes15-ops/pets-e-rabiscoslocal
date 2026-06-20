<?php

declare(strict_types=1);

require_once '../config/Database.php';

function envValueWebhook(string $key, string $default = ''): string
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

function mercadoPagoGet(string $path, string $accessToken): array
{
    $url = 'https://api.mercadopago.com' . $path;

    if (!function_exists('curl_init')) {
        $context = stream_context_create([
            'http' => [
                'method' => 'GET',
                'header' => "Authorization: Bearer {$accessToken}\r\n",
                'ignore_errors' => true
            ]
        ]);
        $responseBody = file_get_contents($url, false, $context);
    } else {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => ['Authorization: Bearer ' . $accessToken],
            CURLOPT_TIMEOUT => 30
        ]);
        $responseBody = curl_exec($ch);
        curl_close($ch);
    }

    $data = json_decode((string) $responseBody, true);
    return is_array($data) ? $data : [];
}

try {
    $payload = json_decode(file_get_contents('php://input') ?: '', true);
    $paymentId = $_GET['id'] ?? $_GET['data_id'] ?? ($payload['data']['id'] ?? null);
    $topic = $_GET['topic'] ?? $_GET['type'] ?? ($payload['type'] ?? '');

    if (!$paymentId || !str_contains((string) $topic, 'payment')) {
        http_response_code(200);
        echo 'ignored';
        exit;
    }

    $accessToken = envValueWebhook('MERCADO_PAGO_ACCESS_TOKEN');
    if ($accessToken === '') {
        throw new RuntimeException('Token do Mercado Pago nao configurado.');
    }

    $payment = mercadoPagoGet('/v1/payments/' . urlencode((string) $paymentId), $accessToken);
    $pedidoId = (int) ($payment['external_reference'] ?? ($payment['metadata']['pedido_id'] ?? 0));

    if ($pedidoId > 0) {
        $database = new Database();
        $pdo = $database->conectar();
        $stmt = $pdo->prepare(
            'UPDATE pedidos
             SET status = :status, mercado_pago_payment_id = :payment_id, pagamento_json = :pagamento_json, atualizado_em = NOW()
             WHERE id = :id'
        );
        $stmt->execute([
            ':status' => (string) ($payment['status'] ?? 'desconhecido'),
            ':payment_id' => (string) $paymentId,
            ':pagamento_json' => json_encode($payment, JSON_UNESCAPED_UNICODE),
            ':id' => $pedidoId
        ]);
    }

    http_response_code(200);
    echo 'ok';
} catch (Throwable $erro) {
    error_log('Erro no webhook Mercado Pago: ' . $erro->getMessage());
    http_response_code(200);
    echo 'error logged';
}
