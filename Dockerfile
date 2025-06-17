FROM php:8.2-cli

# Set working directory
WORKDIR /app

# Copy project files
COPY . .

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    php -r "unlink('composer-setup.php');"

# Install dependencies
RUN composer install

# Expose the port Render uses
EXPOSE 8080

# Start PHP server from public folder
CMD ["php", "-S", "0.0.0.0:8080", "-t", "public"]
