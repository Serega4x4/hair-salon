#!/bin/bash

until mysqladmin ping -h db -u root --silent; do
    echo "Waiting for MySQL to be ready..."
    sleep 2
done

# Rules
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache

echo "Running migrations and seeding..."
php artisan migrate --force
php artisan db:seed --class=DatabaseSeeder --force
php artisan db:seed --class=SuperuserSeeder --force

echo "Clearing and caching Laravel configuration..."
php artisan config:clear
php artisan cache:clear
php artisan config:cache

# Start PHP-FPM
exec php-fpm
