#!/bin/sh
set -e
export DEBIAN_FRONTEND=noninteractive
echo "Deploying"
source .env
ssh -i $DEPLOYMENT_SSH_KEY $DEPLOYMENT_USER@$DEPLOYMENT_IP <<ENDSSH
cd $DEPLOYMENT_PATH
git pull
composer install --no-interaction --optimize-autoloader --no-dev
npm install
npm run build
php artisan optimize:clear
php artisan schedule:clear-cache
php artisan optimize
php artisan icons:cache
php artisan filament:cache-components
php artisan migrate --force
php artisan octane:reload
sudo supervisorctl start queue
ENDSSH
echo "Done! See above for any potential errors.";
