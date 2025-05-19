# Dockerfile
FROM wordpress:php8.2-fpm

# Install unzip if not present
RUN apt-get update \
    && apt-get install -y unzip \
    && rm -rf /var/lib/apt/lists/*

# Copy Object Cache Pro zip into the image
COPY object-cache-pro.zip /tmp/object-cache-pro.zip

# Unzip plugin and copy drop-in
RUN unzip -q /tmp/object-cache-pro.zip -d /var/www/html/wp-content/plugins/ \
    && cp /var/www/html/wp-content/plugins/object-cache-pro/stubs/object-cache.php /var/www/html/wp-content/object-cache.php \
    && chown -R www-data:www-data /var/www/html/wp-content/plugins/object-cache-pro /var/www/html/wp-content/object-cache.php

# Clean up
RUN rm /tmp/object-cache-pro.zip
