<?php

namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'ebw_bank');

// Project repository
set('repository', 'git@gitlab.com:evolutap/ebw-bank.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', false);
set('ssh_multiplexing', false);

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);

set('bin/php', function () {
    return '/usr/local/bin/ea-php80';
});

set('bin/composer', function () {
    return '/usr/local/bin/ea-php80 /opt/cpanel/composer/bin/composer';
});

// Hosts

host('162.240.42.149')
    ->hostname('162.240.42.149')
    ->user('passou73')
    ->set('deploy_path', '/home/passou73/public_html/ebwbank.com.br');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

task('fix:permissions', function () {
    run('chmod -R 755 {{deploy_path}}/releases');
});
// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

before('deploy:symlink', 'fix:permissions');
