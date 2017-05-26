@servers(['localhost' => '127.0.0.1'])


@story('deploy')
    composer
    migration
    permissions
@endstory

@task('composer', ['on' => 'localhost'])
composer install
@endtask

@task('migration', ['on' => 'localhost'])
php artisan migrate
@endtask

@task('permissions', ['on' => 'localhost'])
sudo chmod 777 -R storage/framework
sudo chmod 777 -R storage/logs
sudo chmod 777 -R bootstrap/cache
@endtask
