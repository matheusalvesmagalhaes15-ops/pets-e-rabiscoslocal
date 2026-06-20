FROM php:8.3-apache

# Instala a extensao PDO para MySQL
RUN docker-php-ext-install pdo pdo_mysql

COPY . /var/www/html/

EXPOSE 80
