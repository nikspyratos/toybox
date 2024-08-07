#!/bin/sh
set -e
export DEBIAN_FRONTEND=noninteractive
toyboxDir="$PWD"
echo "Toybox will create a new Laravel project in the directory above the current one. The installer will ask some questions throughout the process, so keep an eye on it!"
read -p "Repo name (will create a directory with this name to initialise the project in:" repoName
read -p "App Name: " appName
read -p "Company Name (required for T&Cs and Privacy Policy): " appName
read -p "Domain (WITHOUT 'https:// or www.'): " appDomain
appDir="$toyboxDir/../$repoName"
prodAppPath="\/home\/ubuntu\/$(basename $repoName)"

# Install Laravel & packages, update composer config
composer global require laravel/installer
npm install -g rustywind
laravel new $repoName --git --database=sqlite --jet --stack=livewire --dark --api --verification --pest -n
php $appDir/artisan install:broadcasting -n
compose require livewire/livewire filament/filament pxlrbt/filament-environment-indicator stechstudio/filament-impersonate laravel/folio laravel/octane laravel/pulse laravel/sanctum laravel/socialite joelbutcher/socialstream spatie/laravel-cookie-consent
composer require --dev barryvdh/laravel-debugbar barryvdh/laravel-ide-helper pestphp/pest-plugin-laravel pestphp/pest-plugin-type-coverage christophrumpel/missing-livewire-assertions driftingly/rector-laravel larastan/larastan nunomaduro/phpinsights rector/rector roave/security-advisories tightenco/duster
composerOldAutoloadCmd=`cat $toyboxDir/templates/replacements/composerOldAutoloadCmd`
composerNewAutoloadCmd=`cat $toyboxDir/templates/replacements/composerNewAutoloadCmd`
sed -i.bak "s/$composerAutoloadCmd/$composerNewAutoloadCmd/g" $appDir/composer.json

# Run package initiations
php $appDir/artisan folio:install
php $appDir/artisan octane:install --server=frankenphp -n
php $appDir/artisan vendor:publish --provider="Laravel\Pulse\PulseServiceProvider"
latestMigration="$appDir/database/migrations/$(ls -t $appDir/database/migrations | head -n 1)"
rm -f $(ls -t $appDir/database/migrations | head -n 1) # Delete latest migration file (Pulse) - will override it
php $appDir/artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"
php $appDir/artisan socialstream:install jetstream livewire -n
php artisan filament:install --panels

# Copy template files to their respective destinations
cp -Rf $toyboxDir/templates/root/. $appdir
cp $toyboxDir/templates/.hooks $appDir/.hooks
cp -Rf $toyboxDir/templates/app/. $appDir/app
cp $toyboxDir/templates/bin $appDir/bin
cp -Rf $toyboxDir/templates/database/. $appDir/database
cp -Rf $toyboxDir/templates/public/. $appDir/public
cp -Rf $toyboxDir/templates/resources/. $appDir/resources

# Update configs, service providers, etc.
appConfigs=`cat $toyboxDir/templates/replacements/app`
databaseConfigs=`cat $toyboxDir/templates/replacements/database`
sed -i.bak "125 $databaseConfigs" $appDir/config/app.php
sed -i.bak "111 $databaseConfigs" $appDir/config/database.php
appServiceProviderOld=`cat $toyboxDir/templates/replacements/AppServiceProviderOld`
appServiceProviderNew=`cat $toyboxDir/templates/replacements/AppServiceProviderNew`
sed -i.bak "s/$appServiceProviderOld/$appServiceProviderNew/g" $appDir/app/Providers/AppServiceProvider.php
currentDate=`date -I`
sed -i.bak "s/current_date/$currentDate/g" $appDir/resources/views/pages/privacy-policy.blade.php
sed -i.bak "s/current_date/$currentDate/g" $appDir/resources/views/pages/terms.blade.php

# .env changes, fill template files with their real values, create a prod example env
sed -i.bak "s/example.com=/$appDomain/g" $appDir/.env.example
sed -i.bak "s/APP_NAME=\"Laravel\"/APP_NAME=\"$appName\"/g" $appDir/.env.example
sed -i.bak "s/APP_URL=/APP_URL=https:\/\/$appDomain/g" .env.example
envKeys = `cat $toyboxDir/templates/replacements/env`
echo $envKeys >> $appDir/.env.example
sed -i.bak "s/DEPLOYMENT_PATH=/DEPLOYMENT_PATH=$prodAppPath/g" .env.example
sed -i.bak "s/toybox-laravel.test/$appDomain/g" $appDir/Caddyfile
sed -i.bak "s/APP_PATH/$prodAppPath/g" $appDir/Caddyfile
sed -i.bak "s/APP_PATH/$prodAppPath/g" $appDir/octane.conf
sed -i.bak "s/APP_PATH/$prodAppPath/g" $appDir/reverb.conf
sed -i.bak "s/APP_PATH/$prodAppPath/g" $appDir/queue.conf

# App, git, database setup
touch $appDir/database/database.sqlite
touch $appDir/database/cache.sqlite
touch $appDir/database/queue.sqlite
touch $appDir/database/pulse.sqlite
cd $appDir
git config --local include.path ../.gitconfig
composer update --no-interaction --prefer-dist --optimize-autoloader
npm update
npm run build
php artisan key:generate
php artisan migrate --force --seed
php artisan storage:link
./vendor/bin/duster fix

# Cleanup
# MacOS specific: Delete .bak files.
# See https://stackoverflow.com/questions/4247068/sed-command-with-i-option-failing-on-mac-but-works-on-linux
# and https://superuser.com/questions/241333/mac-remove-all-files-with-a-certain-extension-from-a-directory-tree
find ./ -name "*.bak" -exec rm {} \;

echo "
Done! See above for any potential errors.
TODO for you:
- Make sure to run `git remote add origin {yourRepoUrl}` to point your repo to your VCS.
- Build your landing page! And make sure to add `@include('cookie-consent::index')` to the bottom of the HTML body for the cookie consent banner. Otherwise, remove the `spatie/laravel-cookie-consent` package.
- If using Jetstream teams, uncomment the `HasTeams` trait comments in `app/Models/User.php`. If not, you can delete those comments.
"
