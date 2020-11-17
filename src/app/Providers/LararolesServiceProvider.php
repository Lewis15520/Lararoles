<?php

namespace Lewis15520\Lararoles\app\Providers;

use Illuminate\Support\ServiceProvider;

class LararolesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {

            if(! class_exists('CreateRolesTable')) {
                $this->publishes([
                    __DIR__ . '/../../database/migrations/create_roles_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_lararoles_roles_table.php'),
                ], 'migrations');
            }

            if(! class_exists('CreatePermissionsTable')) {
                $this->publishes([
                    __DIR__ . '/../../database/migrations/create_permissions_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_lararoles_permissions_table.php'),
                ], 'migrations');
            }

            if(! class_exists('CreatePermissionRoleTable')) {
                $this->publishes([
                    __DIR__ . '/../../database/migrations/create_permission_role_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_lararoles_permission_role_table.php'),
                ], 'migrations');
            }

            if(! class_exists('CreateRoleUserTable')) {
                $this->publishes([
                    __DIR__ . '/../../database/migrations/create_role_user_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_lararoles_role_user_table.php'),
                ], 'migrations');
            }

        }

    }

    public function register()
    {

    }
}
