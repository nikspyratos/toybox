#!/bin/sh
app_path=$(pwd)
echo "Copying .env.prod.example to .env and using it";sleep 1;
cp .env.prod.example .env
source .env
# PHP
echo "Installing PHP";sleep 1;
sudo apt update
sudo apt install -y lsb-release gnupg2 ca-certificates apt-transport-https software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install -y php8.2 php8.2-fpm php8.2-curl php8.2-dom php8.2-mbstring php8.2-xml php8.2-sqlite3 php8.2-mysql php8.2-redis
sudo cp ./templates/php8.2-fpm.service /etc/systemd/service/php8.2-fpm.service
sudo systemctl daemon-reload
sudo systemctl restart php8.2-fpm
# MariaDB
echo "Installing MariaDB";sleep 1;
DEBIAN_FRONTEND=noninteractive timeout=900 apt-get install -y mariadb-server
read -p "Database username: " db_user
read -p "Database password: " db_password
mysql --user="root" -e "CREATE USER IF NOT EXISTS '$db_user'@'0.0.0.0' IDENTIFIED BY '$db_password';"
mysql --user="root" -e "CREATE USER IF NOT EXISTS '$db_user'@'%' IDENTIFIED BY '$db_password';"
mysql --user="root" -e "GRANT ALL PRIVILEGES ON *.* TO '$db_user'@'0.0.0.0' WITH GRANT OPTION;"
mysql --user="root" -e "GRANT ALL PRIVILEGES ON *.* TO '$db_user'@'%' WITH GRANT OPTION;"
mysql --user="root" -e "FLUSH PRIVILEGES;"
mysql --user="root" -e "CREATE DATABASE IF NOT EXISTS $DB_DATABASE character set UTF8mb4 collate utf8mb4_unicode_ci;"
# Redis
echo "Installing Redis";sleep 1;
sudo apt install redis
sudo sed "s/supervised no/supervised systemd/g" /etc/redis/redis.conf
sudo systemctl restart redis.service
# Caddy
echo "Installing Caddy";sleep 1;
sudo apt install -y debian-keyring debian-archive-keyring apt-transport-https
curl -1sLf 'https://dl.cloudsmith.io/public/caddy/stable/gpg.key' | sudo gpg --dearmor -o /usr/share/keyrings/caddy-stable-archive-keyring.gpg
curl -1sLf 'https://dl.cloudsmith.io/public/caddy/stable/debian.deb.txt' | sudo tee /etc/apt/sources.list.d/caddy-stable.list
sudo apt update
sudo apt install caddy
caddy reload
echo "Setting up Supervisor for queue work";sleep 1;
sudo apt-get install supervisor
cp templates/horizon.conf /etc/supervisor/conf.d/
sudo supervisorctl reread
sudo supervisorctl update
sudo supervisorctl start laravel-worker:*
# Application
echo "Setting up application";sleep 1;
composer install
npm install
npm run build
sed -i '' "s/DB_USERNAME=/DB_USERNAME=$db_user/g;s/DB_PASSWORD=/DB_PASSWORD=$db_password/g" .env
php artisan key:generate
php artisan migrate --force --seed
echo "Installing Laravel cron schedule";sleep 1;
crontab -l >> mycron
echo '\n'"# '* * * * * php $app_path/artisan schedule:run >> /dev/null 2>&1" >> mycron
crontab mycron
rm mycron
echo -e "Installation complete!";
