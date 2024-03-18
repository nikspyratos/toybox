#!/bin/sh
set -e
export DEBIAN_FRONTEND=noninteractive
prod_app_path="\/home\/ubuntu\/$(basename $PWD)"
read -p "App Name: " app_name
read -p "Domain (WITHOUT 'https:// or www.'): " app_domain
# Replaces MAIL_FROM_ADDRESS
sed -i.bak "s/example.com=/$app_domain/g" .env.example
sed -i.bak "s/example.com=/$app_domain/g" .env.prod.example
# Application variables
sed -i.bak "s/APP_NAME=\"Toybox\"/APP_NAME=\"$app_name\"/g" .env.example
sed -i.bak "s/APP_NAME=\"Toybox\"/APP_NAME=\"$app_name\"/g" .env.prod.example
sed -i.bak "s/REVERB_HOST=/REVERB_HOST=https:\/\/$app_domain/g" .env.example
sed -i.bak "s/REVERB_HOST=/REVERB_HOST=https:\/\/$app_domain/g" .env.prod.example
sed -i.bak "s/APP_URL=/APP_URL=https:\/\/$app_domain/g" .env.prod.example
# For production provisioning & deployment
sed -i.bak "s/DEPLOYMENT_PATH=/DEPLOYMENT_PATH=$prod_app_path/g" .env.example
sed -i.bak "s/toybox-laravel.test/$app_domain/g" Caddyfile.prod
sed -i.bak "s/APP_PATH/$prod_app_path/g" Caddyfile.prod
sed -i.bak "s/APP_PATH/$prod_app_path/g" templates/octane.conf
sed -i.bak "s/APP_PATH/$prod_app_path/g" templates/reverb.conf
sed -i.bak "s/APP_PATH/$prod_app_path/g" templates/queue.conf
# Local setup
touch database/database.sqlite
touch database/cache.sqlite
touch database/queue.sqlite
touch database/pulse.sqlite
touch database/telescope.sqlite
touch database/activities.sqlite
git config --local include.path ../.gitconfig
composer update --no-interaction --prefer-dist --optimize-autoloader
npm update
npm run build
php artisan ide-helper:eloquent
cp .env.example .env
php artisan key:generate
# Will fail here if local DB is not set up with root & no password. No biggie
# artisan migrate --force will create a database for you if one is missing and the connection works. Without --force it will ask.
php artisan migrate --force --seed
php artisan storage:link
# Cleanup
./bin/cleanup.sh
echo "Done! See above for any potential errors.\n If using Reverb, replace `REVERB_APP_ID=toybox` with your app name hyphenated."
