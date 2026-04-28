# Dockerfile para Laravel (PHP 8.4, Composer, Node.js)
FROM php:8.4-fpm

# Instala dependencias del sistema
RUN apt-get update \
    && apt-get install -y \
        git \
        curl \
        libpng-dev \
        libonig-dev \
        libxml2-dev \
        zip \
        unzip \
        npm \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instala Composer
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

# Instala Node.js (v18)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

WORKDIR /var/www

# Copia solo los archivos de dependencias primero para aprovechar el cache de Docker
COPY package*.json ./
# Limpia node_modules y package-lock.json antes de instalar
RUN rm -rf node_modules package-lock.json && npm cache clean --force && npm install

# Copia el resto del código
COPY . .

CMD ["php-fpm"]