# ./wordpress/Dockerfile
FROM wordpress:php8.2-fpm

# Systempakete und Dev-Libs installieren
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    libzstd-dev \
    liblz4-dev \
    libzip-dev \
    libssl-dev \
    pkg-config \
    zlib1g-dev \
    libpcre3-dev \
    && rm -rf /var/lib/apt/lists/*

RUN pecl install igbinary zstd \
    && docker-php-ext-enable igbinary zstd

RUN git clone --branch develop --depth 1 https://github.com/phpredis/phpredis.git /usr/src/php/ext/redis \
    && docker-php-ext-configure redis --enable-redis-igbinary --enable-redis-zstd \
    && docker-php-ext-install redis \
    && rm -rf /usr/src/php/ext/redis

# Object Cache Pro Plugin hinzufügen
COPY object-cache-pro.zip /tmp/object-cache-pro.zip

RUN unzip -q /tmp/object-cache-pro.zip -d /var/www/html/wp-content/plugins/ \
    && cp /var/www/html/wp-content/plugins/object-cache-pro/stubs/object-cache.php /var/www/html/wp-content/object-cache.php \
    && chown -R www-data:www-data /var/www/html/wp-content/plugins/object-cache-pro /var/www/html/wp-content/object-cache.php \
    && rm /tmp/object-cache-pro.zip
