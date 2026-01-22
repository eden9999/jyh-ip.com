FROM php:8.2-apache

# System deps
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Apache rewrite
RUN a2enmod rewrite

# Set Apache doc root to Laravel public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Workdir
WORKDIR /var/www/html

# Copy code
COPY . .

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Expose
EXPOSE 80

# Container start command
CMD bash -c "\
  if [ ! -f .env ]; then cp .env.example .env; fi && \
  composer install --no-dev --optimize-autoloader --no-interaction && \
  php artisan key:generate --force && \
  apache2-foreground \
"