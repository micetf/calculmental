FROM php:5.6-apache

RUN a2enmod rewrite

COPY php.ini /usr/local/etc/php/conf.d/custom.ini

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html