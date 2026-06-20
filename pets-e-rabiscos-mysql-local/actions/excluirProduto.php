<?php

require_once '../config/Database.php';

$isAjax = str_contains($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json')
    || strtolower($_SERVER['HTTP_X_REQUESTED_WITH'] ?? '') === 'fetch';

function responderExclusaoJson(int $status, array $payload): void
{
    http_response_code($status);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($payload);
    exit;
}

$id = filter_input(
    $_SERVER['REQUEST_METHOD'] === 'POST' ? INPUT_POST : INPUT_GET,
    'id',
    FILTER_VALIDATE_INT
);

if ($id) {
    try {
        $database = new Database();
        $conexao = $database->conectar();

        $sql = "DELETE FROM produtos WHERE id = :id";

        $stmt = $conexao->prepare($sql);

        $stmt->execute([
            ':id' => $id
        ]);

        if ($isAjax) {
            responderExclusaoJson(200, [
                'sucesso' => true
            ]);
        }
    } catch (Throwable $erro) {
        error_log('Erro ao excluir produto: ' . $erro->getMessage());

        if ($isAjax) {
            responderExclusaoJson(500, [
                'sucesso' => false,
                'mensagem' => 'Nao foi possivel excluir o produto.'
            ]);
        }

        header('Location: ../index.php#produtos');
        exit;
    }
} elseif ($isAjax) {
    responderExclusaoJson(400, [
        'sucesso' => false,
        'mensagem' => 'Produto invalido.'
    ]);
}

header('Location: ../index.php#produtos');
exit;
