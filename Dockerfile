FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Installer Composer directement depuis l'image officielle
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite

COPY php.ini /usr/local/etc/php/conf.d/custom.ini

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html/