#!/bin/sh
git config --local include.path ../.gitconfig
composer install
npm install
php artisan ide-helper:eloquent
touch sqlite/database.sqlite
cp .env.example .env
php artisan key:generate
