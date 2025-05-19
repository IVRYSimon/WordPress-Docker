# ./wordpress/Dockerfile
FROM wordpress:php8.2-fpm

# Systempakete installieren + Redis-Extensions via PECL
RUN apt-get update && apt-get install -y \
    unzip \
    libzstd-dev \
    liblz4-dev \
    libzip-dev \
    libssl-dev \
    git \
    && pecl install redis igbinary zstd \
    && docker-php-ext-enable redis igbinary zstd \
    && rm -rf /var/lib/apt/lists/*

# Object Cache Pro Plugin hinzufügen
COPY object-cache-pro.zip /tmp/object-cache-pro.zip

RUN unzip -q /tmp/object-cache-pro.zip -d /var/www/html/wp-content/plugins/ \
    && cp /var/www/html/wp-content/plugins/object-cache-pro/stubs/object-cache.php /var/www/html/wp-content/object-cache.php \
    && chown -R www-data:www-data /var/www/html/wp-content/plugins/object-cache-pro /var/www/html/wp-content/object-cache.php \
    && rm /tmp/object-cache-pro.zip
