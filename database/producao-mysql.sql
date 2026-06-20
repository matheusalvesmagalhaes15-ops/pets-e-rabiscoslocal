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

CREATE TABLE IF NOT EXISTS pedidos (
  id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
  cliente_nome VARCHAR(180) NOT NULL,
  cliente_email VARCHAR(180) NOT NULL,
  cliente_telefone VARCHAR(40) NULL,
  total DECIMAL(10, 2) NOT NULL,
  status VARCHAR(60) NOT NULL DEFAULT 'aguardando_pagamento',
  itens_json JSON NOT NULL,
  mercado_pago_preference_id VARCHAR(120) NULL,
  mercado_pago_payment_id VARCHAR(120) NULL,
  checkout_url TEXT NULL,
  pagamento_json JSON NULL,
  criado_em TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  atualizado_em TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (id),
  INDEX pedidos_status_idx (status),
  INDEX pedidos_cliente_email_idx (cliente_email),
  INDEX pedidos_preference_idx (mercado_pago_preference_id),
  INDEX pedidos_payment_idx (mercado_pago_payment_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
