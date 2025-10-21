#!/bin/sh
set -e

# Replace PORT in nginx.conf
envsubst '${PORT}' < /etc/nginx/nginx.conf > /etc/nginx/nginx.conf.tmp && mv /etc/nginx/nginx.conf.tmp /etc/nginx/nginx.conf

# Ensure permissions and cache
chown -R www-data:www-data /var/www/html || true
php artisan config:cache || true

exec "$@"
