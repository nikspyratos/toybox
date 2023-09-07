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
sudo apt install -y php8.2 php8.2-fpm php8.2-intl php8.2-curl php8.2-dom php8.2-mbstring php8.2-xml php8.2-sqlite3 php8.2-mysql php8.2-redis composer
sudo mkdir /etc/systemd/service
sudo cp ./templates/php8.2-fpm.service /etc/systemd/service/php8.2-fpm.service
sudo sed -i "s/www-data/caddy/g" /etc/php/8.2/fpm/pool.d/www.conf
sudo systemctl daemon-reload
sudo systemctl restart php8.2-fpm
# NPM 20
curl -fsSL https://deb.nodesource.com/setup_20.x | sudo bash -
# MariaDB
echo "Installing MariaDB";sleep 1;
sudo timeout=900 apt-get install -y mariadb-server
read -p "Database username: " db_user
read -p "Database password: " db_password
export db_user
export db_password
sudo mysql --user="root" -e "CREATE USER IF NOT EXISTS '$db_user'@'0.0.0.0' IDENTIFIED BY '$db_password';"
sudo mysql --user="root" -e "CREATE USER IF NOT EXISTS '$db_user'@'%' IDENTIFIED BY '$db_password';"
sudo mysql --user="root" -e "GRANT ALL PRIVILEGES ON *.* TO '$db_user'@'0.0.0.0' WITH GRANT OPTION;"
sudo mysql --user="root" -e "GRANT ALL PRIVILEGES ON *.* TO '$db_user'@'%' WITH GRANT OPTION;"
sudo mysql --user="root" -e "FLUSH PRIVILEGES;"
sudo mysql --user="root" -e "CREATE DATABASE IF NOT EXISTS $DB_DATABASE character set UTF8mb4 collate utf8mb4_unicode_ci;"
# Redis
echo "Installing Redis";sleep 1;
sudo apt install -y redis
sudo sed "s/supervised no/supervised systemd/g" /etc/redis/redis.conf
sudo systemctl restart redis.service
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
echo "Setting up Supervisor for queue work";sleep 1;
sudo apt-get install -y supervisor
sudo cp templates/horizon.conf /etc/supervisor/conf.d/
sudo supervisorctl reread
sudo supervisorctl update
sudo supervisorctl start horizon
# Application
echo "Setting up application";sleep 1;
npm install
npm run build
sed -i "s/DB_USERNAME=root/DB_USERNAME=$db_user/g;s/DB_PASSWORD=/DB_PASSWORD=$db_password/g" .env
php artisan key:generate
php artisan migrate --force --seed
php artisan storage:link
echo "Installing Laravel cron schedule";sleep 1;
crontab templates/cron
echo -e "Installation complete! Please change your Caddyfile's instances of APP_PATH and your .env DEPLOYMENT_PATH value to $app_path";
