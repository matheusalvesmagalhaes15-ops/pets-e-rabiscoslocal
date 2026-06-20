<?php

declare(strict_types=1);

require_once '../config/Database.php';

$isAjax = str_contains($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json')
    || strtolower($_SERVER['HTTP_X_REQUESTED_WITH'] ?? '') === 'fetch';

function responderCadastroJson(int $status, array $payload): void
{
    http_response_code($status);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($payload);
    exit;
}

function salvarImagemProduto(array $arquivo): string
{
    if (($arquivo['error'] ?? UPLOAD_ERR_NO_FILE) === UPLOAD_ERR_NO_FILE) {
        return '';
    }

    if (($arquivo['error'] ?? UPLOAD_ERR_OK) !== UPLOAD_ERR_OK) {
        throw new RuntimeException('Nao foi possivel enviar a imagem.');
    }

    $tamanhoMaximo = 5 * 1024 * 1024;
    if (($arquivo['size'] ?? 0) > $tamanhoMaximo) {
        throw new RuntimeException('A imagem deve ter no maximo 5 MB.');
    }

    $tmpName = (string) ($arquivo['tmp_name'] ?? '');
    $mimeType = mime_content_type($tmpName);
    $extensoesPermitidas = [
        'image/jpeg' => 'jpg',
        'image/png' => 'png',
        'image/webp' => 'webp',
        'image/gif' => 'gif'
    ];

    if (!isset($extensoesPermitidas[$mimeType])) {
        throw new RuntimeException('Envie uma imagem JPG, PNG, WebP ou GIF.');
    }

    $diretorioDestino = dirname(__DIR__) . '/img/produtos/cadastrados';
    if (!is_dir($diretorioDestino) && !mkdir($diretorioDestino, 0775, true)) {
        throw new RuntimeException('Nao foi possivel criar a pasta de imagens.');
    }

    $nomeArquivo = sprintf(
        'produto-%s-%s.%s',
        date('YmdHis'),
        bin2hex(random_bytes(4)),
        $extensoesPermitidas[$mimeType]
    );
    $destino = $diretorioDestino . '/' . $nomeArquivo;

    if (!move_uploaded_file($tmpName, $destino)) {
        throw new RuntimeException('Nao foi possivel salvar a imagem.');
    }

    return 'img/produtos/cadastrados/' . $nomeArquivo;
}

try {
    $nome = trim((string) ($_POST['nome'] ?? ''));
    $categoria = trim((string) ($_POST['categoria'] ?? ''));
    $precoBruto = str_replace(',', '.', trim((string) ($_POST['preco'] ?? '')));
    $imagem = salvarImagemProduto($_FILES['imagem'] ?? []);
    $descricao = trim((string) ($_POST['descricao'] ?? ''));

    if ($nome === '' || $categoria === '' || $precoBruto === '' || !is_numeric($precoBruto)) {
        throw new InvalidArgumentException('Dados obrigatorios invalidos.');
    }

    $database = new Database();
    $pdo = $database->conectar();

    $sql = "
    INSERT INTO produtos
    (nome, categoria, preco, imagem, descricao)
    VALUES
    (:nome, :categoria, :preco, :imagem, :descricao)
    ";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':nome' => $nome,
        ':categoria' => $categoria,
        ':preco' => (float) $precoBruto,
        ':imagem' => $imagem,
        ':descricao' => $descricao
    ]);

    $stmt = $pdo->prepare(
        'SELECT id, nome, categoria, preco, imagem, descricao, criado_em FROM produtos WHERE id = :id'
    );
    $stmt->execute([
        ':id' => (int) $pdo->lastInsertId()
    ]);

    $produto = $stmt->fetch();

    if ($isAjax) {
        responderCadastroJson(201, [
            'sucesso' => true,
            'produto' => $produto
        ]);
    }
} catch (Throwable $erro) {
    error_log('Erro ao cadastrar produto: ' . $erro->getMessage());

    if ($isAjax) {
        responderCadastroJson(400, [
            'sucesso' => false,
            'mensagem' => 'Nao foi possivel cadastrar o produto.'
        ]);
    }

    header('Location: ../index.php?erro=produto#produtos');
    exit;
}

header('Location: ../index.php?sucesso=produto#produtos');
exit;
