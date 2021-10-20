# Set master image
FROM php:7.2-fpm-alpine

# Install PHP Composer
RUN docker-php-ext-install pdo pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
