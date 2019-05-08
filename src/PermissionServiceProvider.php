<?php

namespace DavidNineRoc\Permission;

use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->publishes(
                [
                    __DIR__.'/../config/permission.php' => config_path('permission.php'),
                ], 'config'
            );

            $this->publishes(
                [
                    __DIR__.'/../database/migrations/create_permission_tables.php.stub' => database_path('migrations/2019_05_08_151313_create_permission_tables.php'),
                ], 'migrations'
            );

            //            $this->commands(
            //                [
            //                    Commands\CacheReset::class,
            //                    Commands\CreateRole::class,
            //                    Commands\CreatePermission::class,
            //                    Commands\Show::class,
            //                ]
            //            );
        }

    }

}
