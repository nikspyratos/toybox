#!/bin/sh
git config --local include.path ../.gitconfig
composer install
npm install
php artisan ide-helper:eloquent
touch database/database.sqlite
cp .env.example .env
