#!/bin/bash

# Ensure temp directory exists and has proper permissions
mkdir -p /var/www/html/temp/cache
chown -R www-data:www-data /var/www/html/temp
chmod -R 777 /var/www/html/temp

# Start Apache
exec apache2-foreground