#!/bin/sh
echo "Quick deploy - only code updates, cache restarts and service reloads";sleep 1;
export DEBIAN_FRONTEND=noninteractive
source .env
ssh -i $DEPLOYMENT_SSH_KEY $DEPLOYMENT_USER@$DEPLOYMENT_IP <<ENDSSH
cd $DEPLOYMENT_PATH
git pull
php artisan optimize:clear
php artisan schedule:clear-cache
php artisan optimize
php artisan config:cache
php artisan event:cache
php artisan icons:cache
php artisan view:cache
php artisan horizon:terminate
sudo systemctl restart php8.2-fpm
#octane_placeholder
caddy reload
ENDSSH
echo "Done! See above for any potential errors."
