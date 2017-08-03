FROM php:7.1-apache
RUN pecl install apcu-5.1.8 && docker-php-ext-enable apcu
COPY src/ /var/www/html/
