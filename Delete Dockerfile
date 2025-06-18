# Use official PHP 8.2 CLI image
FROM php:8.2-cli

# Set working directory inside the container
WORKDIR /app

# Copy all project files into the container
COPY . .

# Install dependencies with Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    php -r "unlink('composer-setup.php');" && \
    composer install --no-interaction --no-scripts --no-progress

# Expose port 8080 for Render or other hosting
EXPOSE 8080

# Start PHP built-in server pointing to public directory
CMD ["php", "-S", "0.0.0.0:8080", "-t", "public"]
