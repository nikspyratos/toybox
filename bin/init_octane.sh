#!/bin/sh
set -e
export DEBIAN_FRONTEND=noninteractive
prod_app_path="\/home\/ubuntu\/$(basename $PWD)"
composer require laravel/octane
npm install --save-dev chokidar
php artisan octane:install
sed -i.bak "s/APP_PATH/$prod_app_path/g" templates/octane.conf
sed -i.bak 's/php_fastcgi unix\/\/run\/php\/php8\.2-fpm\.sock/reverse_proxy localhost:8000/g' Caddyfile
sed -i.bak 's/#octane_placeholder/php artisan octane:reload/g' bin/deploy.sh
sed -i.bak 's/#octane_placeholder/php artisan octane:reload/g' bin/quick_deploy.sh
# Cleanup
./deploy/cleanup_bak.sh
echo "Done! See above for any potential errors."
