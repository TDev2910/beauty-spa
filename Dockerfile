# Stage 1: Build Assets
FROM node:20-alpine AS build-assets
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Stage 2: PHP Application
FROM dunglas/frankenphp:1-php8.2-alpine

# Install PHP extensions
RUN install-php-extensions \
    pdo_mysql \
    gd \
    intl \
    zip \
    pcntl \
    bcmath

# Set working directory
WORKDIR /app

# Copy application files
COPY . .
COPY --from=build-assets /app/public/build ./public/build

# Install Composer dependencies
ENV COMPOSER_ALLOW_SUPERUSER=1
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Environment variables for FrankenPHP
ENV SERVER_NAME=:8000
ENV APP_ENV=production
ENV APP_DEBUG=false

# Expose port
EXPOSE 8000

# Start FrankenPHP
CMD ["frankenphp", "php-server", "--listen", ":8000", "--root", "public"]
