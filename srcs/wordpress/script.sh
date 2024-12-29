#!/bin/bash

# Wait for MariaDB to be ready before proceeding
until /usr/local/bin/wait-for-it $DB_HOST:3306 --timeout=30 --strict; do
    echo "MariaDB is still not ready. Retrying..."
    sleep 5
done

echo "MariaDB is up"

echo "DB_HOST: $DB_HOST"
echo "DB_NAME: $DB_NAME"
echo "DB_USER: $DB_USER"
echo "DB_PASSWORD: $DB_PASSWORD"

cd /var/www/html
curl -O https://wordpress.org/latest.tar.gz
tar -xzf latest.tar.gz --strip-components=1

if [ ! -f "./wp-config.php" ]; then
    wp config create --allow-root \
    --dbname=$DB_NAME \
    --dbuser=$DB_USER \
    --dbpass=$DB_PASSWORD \
    --dbhost=$DB_HOST:3306 \
    --path='/var/www/html'

    wp core install --allow-root \
    --url="$WP_DOMAIN" \
    --title="$WP_TITLE" \
    --admin_user="$WP_ADMIN_USER" \
    --admin_password="$WP_ADMIN_PASSWORD" \
    --admin_email="$WP_ADMIN_EMAIL" \
    --skip-email

    wp user create --allow-root \
    $WP_USER $WP_USER_EMAIL \
    --role=author \
    --user_pass=$WP_USER_PASSWORD
fi

if  [ ! -d "/run/php" ]; then
    mkdir -p /run/php
fi

exec php-fpm7.4 -F
