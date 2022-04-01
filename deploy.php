<?php

namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'ebw_bank');

// Project repository
set('repository', 'git@gitlab.com:evolutap/ebw-bank.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);
set('ssh_multiplexing', false);

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts

host('project.com')
    ->hostname('127.0.0.1')
    ->user('runcloudio')
    ->set('deploy_path', '~/{{application}}');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');
