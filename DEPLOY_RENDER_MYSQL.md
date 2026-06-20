# Deploy no Render com MySQL online

Este projeto funciona no Render usando Docker e um banco MySQL hospedado fora do XAMPP.

## 1. Criar banco MySQL online

Crie um banco MySQL em um provedor como Railway, Aiven, Clever Cloud, Hostinger/cPanel ou outro serviço MySQL.

Depois execute o SQL de producao:

```sql
database/producao-mysql.sql
```

## 2. Variaveis no Render

No servico do Render, em Environment, configure uma das duas formas.

### Opcao A: URL unica

```env
MYSQL_URL=mysql://usuario:senha@host-do-banco:3306/nome_do_banco
DB_CHARSET=utf8mb4
MERCADO_PAGO_ACCESS_TOKEN=SEU_ACCESS_TOKEN_DO_MERCADO_PAGO
SITE_URL=https://seu-site.onrender.com
```

### Opcao B: variaveis separadas

```env
DB_HOST=host-do-banco
DB_PORT=3306
DB_NAME=nome_do_banco
DB_USER=usuario
DB_PASSWORD=senha
DB_CHARSET=utf8mb4
MERCADO_PAGO_ACCESS_TOKEN=SEU_ACCESS_TOKEN_DO_MERCADO_PAGO
SITE_URL=https://seu-site.onrender.com
```

## 3. Mercado Pago

No Mercado Pago, configure o webhook para:

```text
https://seu-site.onrender.com/actions/webhookMercadoPago.php
```

## Observacao sobre imagens

Uploads feitos em `img/produtos/cadastrados` podem sumir em redeploys se a hospedagem nao tiver disco persistente. Para producao real com cadastro frequente de imagens, use um disco persistente no Render ou armazenamento externo.
