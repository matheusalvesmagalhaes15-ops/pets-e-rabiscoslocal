<?php

class Produto
{
    public function __construct(
        private int $id,
        private string $nome,
        private string $categoria,
        private float $preco,
        private string $imagem,
        private string $descricao
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCategoria(): string
    {
        return $this->categoria;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function getImagem(): string
    {
        return $this->imagem;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }
}