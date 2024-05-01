ARG PHP_VERSION

FROM php:${PHP_VERSION}-apache

RUN docker-php-ext-install mysqli

COPY . /var/www/html/

EXPOSE 80
