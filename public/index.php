# Tumia PHP image rasmi
FROM php:8.2-cli

# Install dependencies
RUN apt-get update && apt-get install -y unzip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy project files
COPY . /app

# Set working directory
WORKDIR /app

# Install PHP dependencies
RUN composer install

# Expose the port
EXPOSE 8080

# Start built-in PHP server
CMD ["php", "-S", "0.0.0.0:8080", "-t", "public"]
