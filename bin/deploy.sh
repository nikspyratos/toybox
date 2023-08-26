#!/bin/sh
echo "Deploying";sleep 1;
source .env
ssh -i $DEPLOYMENT_SSH_KEY $DEPLOYMENT_USER@$DEPLOYMENT_IP <<ENDSSH
cd $DEPLOYMENT_PATH
git pull
composer install
npm install
npm run build
php artisan optimize:clear
php artisan schedule:clear-cache
php artisan optimize
php artisan event:cache
php artisan icons:cache
php artisan view:cache
php artisan migrate --force
php artisan horizon:terminate
sudo systemctl restart php8.2-fpm
#octane_placeholder
caddy reload
ENDSSH
echo "Done! See above for any potential errors.";
