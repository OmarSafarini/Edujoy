FROM bitnami/laravel:latest

WORKDIR /app

COPY . .

RUN composer install --no-dev --optimize-autoloader
