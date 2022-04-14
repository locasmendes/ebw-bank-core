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


// Hosts

host('162.240.42.149')
    ->hostname('162.240.42.149')
    ->user('passou73')
    ->set('deploy_path', '/home/passou73/public_html/ebwbank.com.br');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');
