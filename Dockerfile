# Use official PHP + Apache image
FROM php:8.1-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set Apache DocumentRoot to public folder
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Copy project folders
COPY public/ /var/www/html/public/
COPY includes/ /var/www/html/includes/
COPY components/ /var/www/html/components/
COPY phpmailer/ /var/www/html/phpmailer/

# Set proper permissions inside container
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Set working directory
WORKDIR /var/www/html/public
