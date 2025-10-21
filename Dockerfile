# Multi-stage Dockerfile for building a Laravel app and serving with Nginx + PHP-FPM
# Builds frontend assets with Node, installs PHP dependencies with Composer, and produces a minimal production image

############# Node builder (build frontend) #############
FROM node:18 AS node-builder
WORKDIR /app
COPY package.json package-lock.json* ./
# Use npm install as a fallback when package-lock.json is absent
RUN if [ -f package-lock.json ]; then npm ci --silent; else npm install --silent; fi
COPY resources resources
COPY vite.config.js postcss.config.js tailwind.config.js ./
RUN npm run build

############# Composer / vendor builder #############
FROM composer:2 AS vendor-builder
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-autoloader --prefer-dist --no-interaction --optimize-autoloader
COPY . .
RUN composer dump-autoload --optimize

############# Final image #############
FROM php:8.2-fpm-bullseye

# Install system dependencies and tools
RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install -y \
    nginx \
    supervisor \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
  && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd \
  && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

# Copy application code and vendor
COPY --from=vendor-builder /app /var/www/html

# Copy built frontend assets
COPY --from=node-builder /app/public/build public/build

# Create storage and cache directories and set permissions
RUN mkdir -p storage/framework storage/logs bootstrap/cache \
  && chown -R www-data:www-data /var/www/html || true \
  && chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache || true

# Copy docker configs
COPY ./docker/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY ./docker/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

ENV PORT 8080
EXPOSE 8080

ENV APP_ENV=production
ENV APP_DEBUG=false

ENTRYPOINT ["/entrypoint.sh"]
CMD ["supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
