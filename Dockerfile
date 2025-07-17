FROM php:8.2-apache

# Install ekstensi PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy semua file ke direktori Apache
COPY . /var/www/html

# Ubah DocumentRoot Apache ke folder public (CodeIgniter)
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Aktifkan mod_rewrite
RUN a2enmod rewrite
