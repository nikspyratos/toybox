#!/bin/sh
set -e
export app_path=$(pwd)
export DEBIAN_FRONTEND=noninteractive
echo "Copying .env.prod.example to .env and using it";sleep 1;
cp .env.prod.example .env
source .env
# PHP
echo "Installing PHP";sleep 1;
sudo apt update
sudo apt install -y lsb-release gnupg2 ca-certificates apt-transport-https software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install -y php8.3 php8.3-gd php8.3-intl php8.3-curl php8.3-dom php8.3-mbstring php8.3-xml php8.3-sqlite3 php8.3-mysql composer
sudo mkdir /etc/systemd/service
sudo systemctl daemon-reload
# NPM 20
curl -fsSL https://deb.nodesource.com/setup_20.x | sudo bash -
echo "Installing composer packages";sleep 1;
composer install --no-interaction --optimize-autoloader --no-dev
# Octane
artisan octane:install --server=roadrunner -n
# Application
echo "Setting up application";sleep 1;
npm install
npm run build
php artisan key:generate
php artisan migrate --force --seed
php artisan storage:link
php artisan octane:install --server=frankenphp -n
echo "Installing Laravel cron schedule";sleep 1;
crontab templates/cron
# Supervisor
echo "Setting up Supervisor for queue work";sleep 1;
sudo apt-get install -y supervisor
sudo cp templates/octane.conf /etc/supervisor/conf.d/
sudo cp templates/queue.conf /etc/supervisor/conf.d/
sudo supervisorctl reread
sudo supervisorctl update
sudo supervisorctl start octane
sudo supervisorctl start queue
echo -e "Installation complete! Please change your Caddyfile.prod's instances of APP_PATH and your .env DEPLOYMENT_PATH value to $app_path";
