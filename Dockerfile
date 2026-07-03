# Runtime PHP con Apache para Lumen (framework real).
FROM php:8.3-apache

RUN apt-get update && apt-get install -y libonig-dev unzip \
 && docker-php-ext-install mbstring pdo_mysql \
 && rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .
RUN composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs \
 && cp -n .env.example .env || true

# DocumentRoot -> public/ (front controller de Lumen)
RUN { \
      echo '<VirtualHost *:80>'; \
      echo '  DocumentRoot /var/www/html/public'; \
      echo '  <Directory /var/www/html/public>'; \
      echo '    AllowOverride All'; \
      echo '    Require all granted'; \
      echo '    DirectoryIndex index.php'; \
      echo '  </Directory>'; \
      echo '</VirtualHost>'; \
    } > /etc/apache2/sites-available/000-default.conf \
 && chmod -R 777 storage

EXPOSE 80
