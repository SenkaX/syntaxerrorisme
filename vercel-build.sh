#!/bin/sh

echo "Building assets..."
npm run build

echo "Optimizing Laravel..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
