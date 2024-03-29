#!/bin/sh
set -e
export DEBIAN_FRONTEND=noninteractive
echo "Quick deploy - only code updates, cache restarts and service reloads";sleep 1;
source .env
ssh -i $DEPLOYMENT_SSH_KEY $DEPLOYMENT_USER@$DEPLOYMENT_IP <<ENDSSH
cd $DEPLOYMENT_PATH
git pull
php artisan optimize:clear
php artisan schedule:clear-cache
php artisan optimize
php artisan icons:cache
php artisan filament:cache-components
php artisan app:cache-doc-nav-links
php artisan octane:reload
sudo supervisorctl start queue
ENDSSH
echo "Done! See above for any potential errors."
