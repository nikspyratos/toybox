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
sudo apt install -y php8.3 php8.3-fpm php8.3-intl php8.3-curl php8.3-dom php8.3-mbstring php8.3-xml php8.3-sqlite3 php8.3-mysql composer
sudo mkdir /etc/systemd/service
sudo cp ./templates/php8.3-fpm.service /etc/systemd/service/php8.3-fpm.service
sudo sed -i "s/www-data/caddy/g" /etc/php/8.3/fpm/pool.d/www.conf
sudo systemctl daemon-reload
sudo systemctl restart php8.3-fpm
# NPM 20
curl -fsSL https://deb.nodesource.com/setup_20.x | sudo bash -
# Caddy
echo "Installing Caddy";sleep 1;
sudo ufw allow 80,443/tcp
sudo ufw reload
sudo apt install -y debian-keyring debian-archive-keyring apt-transport-https
curl -1sLf 'https://dl.cloudsmith.io/public/caddy/stable/gpg.key' | sudo gpg --dearmor -o /usr/share/keyrings/caddy-stable-archive-keyring.gpg
curl -1sLf 'https://dl.cloudsmith.io/public/caddy/stable/debian.deb.txt' | sudo tee /etc/apt/sources.list.d/caddy-stable.list
sudo apt update
sudo apt install caddy
# Make caddy run under ubuntu so that it can properly access the directory
sudo cp /lib/systemd/system/caddy.service /etc/systemd/service/
sudo systemctl daemon-reload
sudo systemctl restart caddy
caddy reload
echo "Installing composer packages";sleep 1;
composer install --no-interaction --optimize-autoloader --no-dev
# Octane
sudo add-apt-repository ppa:openswoole/ppa -y
sudo apt update
sudo apt install -y php8.3-openswoole
# Supervisor
echo "Setting up Supervisor for queue work";sleep 1;
sudo apt-get install -y supervisor
sudo cp templates/octane.conf /etc/supervisor/conf.d/
sudo cp templates/queue.conf /etc/supervisor/conf.d/
sudo supervisorctl reread
sudo supervisorctl update
sudo supervisorctl start octane
sudo supervisorctl start queue
# Application
echo "Setting up application";sleep 1;
npm install
npm run build
php artisan key:generate
php artisan migrate --force --seed
php artisan storage:link
echo "Installing Laravel cron schedule";sleep 1;
crontab templates/cron
echo -e "Installation complete! Please change your Caddyfile's instances of APP_PATH and your .env DEPLOYMENT_PATH value to $app_path";
