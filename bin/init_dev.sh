#!/bin/sh
read -p "App Name: " app_name
read -p "Domain (without 'https://'): " app_domain
read -p "Database name: " db_name
sed -i "s/APP_NAME=/APP_NAME=$app_name/g" .env.example
sed -i "s/APP_NAME=/APP_NAME=$app_name/g" .env.prod.example
sed -i "s/APP_URL=/APP_URL=$app_domain/g" .env.example
sed -i "s/APP_URL=/APP_URL=$app_domain/g" .env.prod.example
sed -i "s/DB_DATABASE=/DB_DATABASE=$db_name/g" .env.example
sed -i "s/DB_DATABASE=/DB_DATABASE=$db_name/g" .env.prod.example
# Replaces MAIL_FROM_ADDRESS
sed -i "s/example.com=/$app_domain/g" .env.example
sed -i "s/example.co/$app_domain/g" .env.prod.example
git config --local include.path ../.gitconfig
composer install
npm install
npm run build
php artisan ide-helper:eloquent
cp .env.example .env
php artisan key:generate
# Will fail here if local DB is not set up with root & no password. No biggie
mysql --user="root" -e "CREATE DATABASE IF NOT EXISTS $db_name character set UTF8mb4 collate utf8mb4_unicode_ci;"
php artisan migrate --seed
