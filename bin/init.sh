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
sed -i.bak "s/toybox-laravel.test/$app_domain/g" Caddyfile
sed -i.bak "s/APP_PATH/$prod_app_path/g" Caddyfile
sed -i.bak "s/APP_PATH/$prod_app_path/g" octane.conf
sed -i.bak "s/APP_PATH/$prod_app_path/g" reverb.conf
touch database/database.sqlite
touch database/cache.sqlite
touch database/queue.sqlite
touch database/pulse.sqlite
touch database/telescope.sqlite"
sed -i.bak "s/APP_PATH/$prod_app_path/g" reverb.conf
sed -i.bak "s/APP_PATH/$prod_app_path/g" queue.conf
# Local setup

git config --local include.path ../.gitconfig
composer update --no-interaction --prefer-dist --optimize-autoloader
bun update
bun run build
php artisan ide-helper:eloquent
cp .env.example .env
php artisan key:generate
php artisan migrate --force --seed
php artisan storage:link
./vendor/bin/duster fix
# Cleanup
# MacOS specific: Delete .bak files.
# See https://stackoverflow.com/questions/4247068/sed-command-with-i-option-failing-on-mac-but-works-on-linux
# and https://superuser.com/questions/241333/mac-remove-all-files-with-a-certain-extension-from-a-directory-tree
find ./ -name "*.bak" -exec rm {} \;
rm CNAME

echo "
Done! See above for any potential errors.
TODO for you:
- Build your landing page! And make sure to add `@include('cookie-consent::index')` to the bottom of the HTML body for the cookie consent banner. Otherwise, remove the `spatie/laravel-cookie-consent` package.
- If you'd like to add websockets/realtime functionality, run `php artisan install:broadcasting -n` to install Laravel Reverb. If not, delete the `reverb.conf` file.
- If this is a private project, delete the `LICENSE.md` file.
"
