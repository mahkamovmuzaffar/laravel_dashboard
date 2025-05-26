#!/bin/bash

# Go to the Laravel root directory
cd /var/www/html
# Install Composer dependencies
if [ ! -d "vendor" ]; then
    echo "📦 Vendor folder not found. Running composer install..."
    composer install --no-interaction --prefer-dist --optimize-autoloader
fi

# Check if .env file exists
if [ ! -f .env ]; then
    echo ".env file not found. Copying from .env.example..."
    cp .env.example .env

    echo "Generating app key..."
    php artisan key:generate
else
    echo ".env file already exists. Skipping copy and key generation."
fi

    # Run database migrations
    echo "Running database migrations..."
    php artisan migrate --force

    echo "Start Laravel development server"
    php artisan serve --host=0.0.0.0 --port=8000
