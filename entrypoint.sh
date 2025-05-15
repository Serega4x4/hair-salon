#!/bin/bash

# Ожидание БД 60 секунд
echo "Ожидание MySQL..."
sleep 60

# Laravel кеш
echo "Очистка и кеширование конфигурации Laravel..."
php artisan config:clear
php artisan cache:clear
php artisan config:cache

# Права
chown -R www-data:www-data /var/www/html
chmod -R 755 /var/www/html/storage

# Запуск PHP-FPM
exec php-fpm
