FROM php:8.0-fpm-buster

RUN apt-get update && \
    # installation de git sur le projet pour le gain de performances lors d'installation / update via composer
    apt-get install -y --no-install-recommends git

RUN apt-get update && \
    apt-get install -y --no-install-recommends libssl-dev libzip-dev curl git unzip && \
    pecl install apcu && \
    docker-php-ext-install -j$(nproc) zip opcache pdo_mysql && \
    docker-php-ext-enable apcu sodium && \
    rm -rf /tmp/* /var/tmp/*

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

CMD composer -V ; php-fpm

EXPOSE 9000