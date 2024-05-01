ARG PHP_VERSION

FROM php:${PHP_VERSION}-apache

RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo_pgsql pgsql

COPY . /var/www/html/

EXPOSE 80
