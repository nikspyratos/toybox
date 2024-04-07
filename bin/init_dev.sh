#!/bin/sh
set -e
export DEBIAN_FRONTEND=noninteractive
prod_app_path="\/home\/ubuntu\/$(basename $PWD)"
read -p "App Name: " app_name
read -p "Domain (WITHOUT 'https:// or www.'): " app_domain
# Teams
read -p "Install Jetstream Teams functionality? (y/n): " install_teams
if [[ $install_teams == *"y"* ]]; then
  ./bin/init_teams.sh
else
  sed -i.bak "/#team_placeholder/d" config/jetstream.php
  sed -i.bak "/#teams_use_placeholder/d" config/jetstream.php
  sed -i.bak "/#teams_trait_placeholder/d" config/jetstream.php
  sed -i.bak "/teams_placeholder/d" database/migrations/2014_10_12_000000_create_users_table.php
fi
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
bun update
bun run build
php artisan ide-helper:eloquent
cp .env.example .env
php artisan key:generate
php artisan migrate --force --seed
php artisan storage:link
# Cleanup
./bin/cleanup.sh
echo "Done! See above for any potential errors.\n If using Reverb, replace `REVERB_APP_ID=toybox` with your app name hyphenated."
