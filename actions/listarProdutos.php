<?php

declare(strict_types=1);

require_once '../config/Database.php';

try {
    $database = new Database();
    $conexao = $database->conectar();

    $sql = "SELECT id, nome, categoria, preco, imagem, descricao, criado_em FROM produtos ORDER BY id DESC";

    $stmt = $conexao->query($sql);
    $produtos = $stmt->fetchAll();

    if (basename($_SERVER['SCRIPT_FILENAME'] ?? '') === basename(__FILE__)) {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'sucesso' => true,
            'produtos' => $produtos
        ]);
        exit;
    }

    return $produtos;
} catch (Throwable $erro) {
    error_log('Erro ao listar produtos: ' . $erro->getMessage());

    if (basename($_SERVER['SCRIPT_FILENAME'] ?? '') === basename(__FILE__)) {
        http_response_code(500);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'sucesso' => false,
            'mensagem' => 'Nao foi possivel carregar os produtos.'
        ]);
        exit;
    }

    return [];
}
