# Use the official PHP image with FPM (FastCGI Process Manager)
FROM php:8.4-fpm

# Set the working directory inside the container
WORKDIR /var/www

# Install system dependencies and PHP extensions needed by Laravel
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git

# Install the required PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd pdo pdo_mysql

# Install Composer (PHP dependency manager)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy the Laravel application code into the container
COPY . .

# Set the appropriate permissions for the application
RUN chown -R www-data:www-data /var/www

# Expose port 9000 for PHP-FPM
EXPOSE 9000

# Start the PHP-FPM service
CMD ["php-fpm"]
