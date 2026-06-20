CREATE DATABASE IF NOT EXISTS pets_e_rabiscos
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE pets_e_rabiscos;

CREATE TABLE IF NOT EXISTS produtos (
  id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  nome TEXT NOT NULL,
  categoria TEXT NOT NULL,
  preco DECIMAL(10, 2) NOT NULL,
  imagem TEXT NULL,
  descricao TEXT NULL,
  criado_em TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE INDEX produtos_criado_em_idx
  ON produtos (criado_em);
