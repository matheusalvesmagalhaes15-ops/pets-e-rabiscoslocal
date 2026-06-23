ALTER TABLE pedidos
  ADD COLUMN cliente_cep VARCHAR(12) NULL AFTER cliente_telefone,
  ADD COLUMN cliente_endereco VARCHAR(220) NULL AFTER cliente_cep,
  ADD COLUMN cliente_numero VARCHAR(40) NULL AFTER cliente_endereco,
  ADD COLUMN cliente_complemento VARCHAR(120) NULL AFTER cliente_numero,
  ADD COLUMN cliente_bairro VARCHAR(120) NULL AFTER cliente_complemento,
  ADD COLUMN cliente_cidade VARCHAR(120) NULL AFTER cliente_bairro,
  ADD COLUMN cliente_estado VARCHAR(2) NULL AFTER cliente_cidade;
