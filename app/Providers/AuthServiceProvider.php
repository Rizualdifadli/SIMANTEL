<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('edit-users',function($user){
            return $user->hasRole('admin');
        });

        Gate::define('delete-users',function($user){
            return $user->hasRole('admin');
        });

        Gate::define('manage-tower',function($user){
            return $user->hasRole(['admin','adminb']);
        });

        Gate::define('manage-tower-mersam',function($user){
            return $user->hasRole(['admin','adminb']);
        });

        Gate::define('manage-tower-bulian',function($user){
            return $user->hasRole(['admin','adminb']);
        });

        Gate::define('manage-tower-tembesi',function($user){
            return $user->hasRole(['admin','adminb']);
        });

        Gate::define('manage-tower-batin',function($user){
            return $user->hasRole(['admin','adminb']);
        });

        Gate::define('manage-tower-pemayung',function($user){
            return $user->hasRole(['admin','adminb']);
        });

        Gate::define('manage-tower-seboulu',function($user){
            return $user->hasRole(['admin','adminb']);
        });

        Gate::define('manage-tower-seboilir',function($user){
            return $user->hasRole(['admin','adminb']);
        });

        Gate::define('manage-tower-bajubang',function($user){
            return $user->hasRole(['admin','adminb']);
        });

        Gate::define('register-users',function($user){
            return $user->hasRole(['admin','adminb']);
        });
    }
}
