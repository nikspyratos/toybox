#!/bin/sh
set -e
export DEBIAN_FRONTEND=noninteractive
prod_app_path="\/home\/ubuntu\/$(basename $PWD)"
read -p "App Name: " app_name
read -p "Domain (WITHOUT 'https:// or www.'): " app_domain
read -p "Database name: " db_name
# Replaces MAIL_FROM_ADDRESS
sed -i.bak "s/example.com=/$app_domain/g" .env.example
sed -i.bak "s/example.com=/$app_domain/g" .env.prod.example
# Application variables
sed -i.bak "s/APP_NAME=\"Toybox\"/APP_NAME=\"$app_name\"/g" .env.example
sed -i.bak "s/APP_NAME=\"Toybox\"/APP_NAME=\"$app_name\"/g" .env.prod.example
sed -i.bak "s/APP_URL=/APP_URL=http:\/\/$app_domain/g" .env.example
sed -i.bak "s/APP_URL=/APP_URL=https:\/\/$app_domain/g" .env.prod.example
sed -i.bak "s/DB_DATABASE=toybox/DB_DATABASE=$db_name/g" .env.example
sed -i.bak "s/DB_DATABASE=toybox/DB_DATABASE=$db_name/g" .env.prod.example
# For production provisioning & deployment
sed -i.bak "s/DEPLOYMENT_PATH=/DEPLOYMENT_PATH=$prod_app_path/g" .env.example
sed -i.bak "s/toybox-laravel.test/$app_domain/g" Caddyfile
sed -i.bak "s/APP_PATH/$prod_app_path/g" Caddyfile
sed -i.bak "s/APP_PATH/$prod_app_path/g" templates/horizon.conf
# Local setup
git config --local include.path ../.gitconfig
composer install
npm install
npm run build
php artisan ide-helper:eloquent
cp .env.example .env
php artisan key:generate
# Will fail here if local DB is not set up with root & no password. No biggie
# artisan migrate --force will create a database for you if one is missing and the connection works. Without --force it will ask.
php artisan migrate --force --seed
# Cleanup
./bin/cleanup_bak.sh
echo "Done! See above for any potential errors."
