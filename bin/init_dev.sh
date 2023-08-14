#!/bin/sh
prod_app_path="/home/ubuntu/$(basename $PWD)"
read -p "App Name: " app_name
read -p "Domain (WITHOUT 'https:// or www.'): " app_domain
read -p "Database name: " db_name
# Replaces MAIL_FROM_ADDRESS
sed -i "s/example.com=/$app_domain/g" .env.example
sed -i "s/example.co/$app_domain/g" .env.prod.example
# Application variables
sed -i "s/APP_NAME=/APP_NAME=$app_name/g" .env.example
sed -i "s/APP_NAME=/APP_NAME=$app_name/g" .env.prod.example
sed -i "s/APP_URL=/APP_URL=https:\/\/$app_domain/g" .env.example
sed -i "s/APP_URL=/APP_URL=https:\/\/$app_domain/g" .env.prod.example
sed -i "s/DB_DATABASE=/DB_DATABASE=$db_name/g" .env.example
sed -i "s/DB_DATABASE=/DB_DATABASE=$db_name/g" .env.prod.example
# For production provisioning & deployment
sed -i "s/DEPLOYMENT_PATH=/DEPLOYMENT_PATH=$prod_app_path/g" .env.example
sed -i "s/toybox-laravel.test/$app_domain/g" Caddyfile
sed -i "s/APP_PATH/$prod_app_path/g" Caddyfile
# Local setup
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
echo "Complete! See above for any potential errors."
