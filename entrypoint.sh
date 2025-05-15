#!/bin/bash

# Ждем базу данных (если нужно — добавим wait-for-it позже)
echo "Ожидание MySQL..."
sleep 10

# Очистка и пересоздание кеша Laravel
echo "Очистка и кеширование конфигурации Laravel..."
php artisan config:clear
php artisan cache:clear
php artisan config:cache

# Установка прав (если нужно)
chown -R www-data:www-data /var/www/html
chmod -R 755 /var/www/html/storage

# Запуск PHP-FPM и Nginx
php-fpm -D
nginx -g "daemon off;"
