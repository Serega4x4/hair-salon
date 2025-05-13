FROM php:8.2-fpm

# Установка зависимостей
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nginx \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Установка Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Установка Node.js и npm для Vite
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm

# Рабочая директория
WORKDIR /var/www/html

# Копирование проекта
COPY . /var/www/html

# Установка зависимостей Composer
RUN composer install --optimize-autoloader --no-dev

# Установка зависимостей npm и сборка фронтенда
RUN npm install && npm run build

# Права на файлы
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# Копирование конфигурации Nginx
COPY ./nginx/default.conf /etc/nginx/conf.d/default.conf

# Запуск PHP-FPM и Nginx
CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]