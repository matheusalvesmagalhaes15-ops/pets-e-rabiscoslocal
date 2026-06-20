FROM php:8.3-apache

# Usa apenas um MPM do Apache e instala a extensao PDO para MySQL.
RUN a2dismod mpm_event mpm_worker || true \
    && a2enmod mpm_prefork rewrite \
    && docker-php-ext-install pdo pdo_mysql

COPY . /var/www/html/

EXPOSE 80
