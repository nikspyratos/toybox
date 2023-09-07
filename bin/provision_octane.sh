#!/bin/sh
set -e
export DEBIAN_FRONTEND=noninteractive
echo "Installing Octane"; sleep 1;
sudo add-apt-repository ppa:openswoole/ppa -y
sudo apt update
sudo apt install -y php8.2-openswoole
echo "Installing Octane Horizon config"; sleep 1;
sudo cp templates/horizon.conf /etc/supervisor/conf.d/
sudo supervisorctl reread
sudo supervisorctl update
sudo supervisorctl start octane
echo "Done! See above for any potential errors.";
