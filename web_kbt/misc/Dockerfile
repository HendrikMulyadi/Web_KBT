FROM php:8.3.11-fpm-alpine

# Install dependencies
RUN apk add --no-cache \
        libzip-dev \
        zip \
        unzip \
        oniguruma-dev \
        libxml2-dev \
        libpng-dev \
        libjpeg-turbo-dev \
        freetype-dev \
        icu-dev \
        zlib-dev \
        gmp-dev \
        libxslt-dev \
    && docker-php-ext-install pdo pdo_mysql zip \
    && docker-php-ext-enable pdo_mysql

# Set working directory
WORKDIR /var/www/html
