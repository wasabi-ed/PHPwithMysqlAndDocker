FROM php:apache

# Install MySQL extension
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable error reporting (optional but useful for debugging)
RUN echo "display_errors=On\nerror_reporting=E_ALL" > /usr/local/etc/php/conf.d/errors.ini

