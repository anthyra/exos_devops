FROM php:8.0-fpm-buster

RUN apt-get update && \
    # installation de git sur le projet pour le gain de performances lors d'installation / update via composer
    apt-get install -y --no-install-recommends git

RUN apt-get update && \
    apt-get install -y --no-install-recommends libssl-dev libzip-dev git && \
    docker-php-ext-install -j$(nproc) opcache pdo_mysql && \
    rm -rf /tmp/* /var/tmp/*

WORKDIR /var/www/html

CMD php-fpm

EXPOSE 9000