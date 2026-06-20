<?php

declare(strict_types=1);

require_once '../config/Database.php';

$pedidoId = filter_input(INPUT_GET, 'pedido', FILTER_VALIDATE_INT);
$status = trim((string) ($_GET['status'] ?? 'pending'));

$mensagens = [
    'success' => 'Pagamento aprovado ou em processamento final. Obrigado pela compra!',
    'failure' => 'Pagamento nao concluido. Voce pode tentar novamente pelo carrinho.',
    'pending' => 'Pagamento pendente. Avisaremos quando o Mercado Pago confirmar.'
];

try {
    if ($pedidoId) {
        $statusPedido = match ($status) {
            'success' => 'retorno_aprovado',
            'failure' => 'retorno_recusado',
            default => 'retorno_pendente'
        };

        $database = new Database();
        $pdo = $database->conectar();
        $stmt = $pdo->prepare('UPDATE pedidos SET status = :status, atualizado_em = NOW() WHERE id = :id');
        $stmt->execute([
            ':status' => $statusPedido,
            ':id' => $pedidoId
        ]);
    }
} catch (Throwable $erro) {
    error_log('Erro no retorno Mercado Pago: ' . $erro->getMessage());
}

$mensagem = $mensagens[$status] ?? $mensagens['pending'];
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagamento - Pet & Rabiscos</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main class="container" style="padding: 48px 20px;">
        <div class="page-intro">
            <span class="page-kicker">Mercado Pago</span>
            <h1>Pagamento recebido</h1>
            <p><?= htmlspecialchars($mensagem) ?></p>
            <a class="btn btn-primary" href="../index.php#produtos">Voltar para a loja</a>
        </div>
    </main>
</body>
</html>
