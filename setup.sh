#!/bin/sh
git config --local include.path ../.gitconfig
php artisan ide-helper:eloquent
touch database/database.sqlite
cp .env.example .env
