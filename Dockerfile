# Use the official PHP image from Docker Hub
FROM php:7.4-apache

# Set working directory inside the container
WORKDIR /var/www/html

# Copy the contents of your PHP website to the working directory
COPY . /var/www/html

# Install any necessary dependencies or extensions
# For example, if you need to install mysqli extension:
RUN docker-php-ext-install mysqli

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]