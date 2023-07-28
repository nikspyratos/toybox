<?php

declare(strict_types=1);

namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'git@github.com:nikspyratos/toybox-laravel.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/toybox-laravel');

// Hooks

after('deploy:failed', 'deploy:unlock');
