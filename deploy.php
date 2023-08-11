<?php

declare(strict_types=1);

namespace Deployer;

require 'recipe/laravel.php';
require 'contrib/crontab.php';

// Config

set('repository', 'git@github.com:nikspyratos/toybox-laravel.git');

add('shared_files', []); // Laravel recipe by default includes /storage
add('shared_dirs', ['sqlite']);
add('writable_dirs', ['sqlite']);

// Hosts

host('')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/toybox-laravel')
    ->set('ssh_arguments', ['-i ~/.ssh/toybox_laravel.pem'])
    ->set('forward_agent', false);

// Hooks

task('composer', function () {
    run('cd ~/toybox-laravel/current && composer install --optimize-autoloader --no-dev');
});

task('npm', function () {
    run('cd ~/toybox-laravel/current && npm install');
    run('cd ~/toybox-laravel/current && npm run build');
});

add('crontab:jobs', [
    '* * * * * cd {{current_path}} && {{bin/php}} artisan schedule:run >> /dev/null 2>&1',
]);

// Hooks
after('deploy:success', 'crontab:sync');
after('deploy:failed', 'deploy:unlock');
