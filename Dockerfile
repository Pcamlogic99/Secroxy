# Chukua PHP rasmi (CLI version)
FROM php:8.2-cli

# Install tools za Composer na git
RUN apt-get update && apt-get install -y unzip git curl \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Create app directory
WORKDIR /app

# Copy all project files to /app
COPY . .

# Optional: Install PHP packages with composer
# RUN composer install

# Fungua port 8080 (Render hutumia port tofauti lakini inamap)
EXPOSE 8080

# Start built-in PHP server
CMD ["php", "-S", "0.0.0.0:8080", "-t", "public/"]
