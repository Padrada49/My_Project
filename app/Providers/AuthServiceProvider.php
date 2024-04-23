<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;


use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */

     protected $policies = [
        'APP\Models\User' => 'App\Policies\UserPolicy',
     ];
    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        Gate::before(function($user,$ability){
            if($user->checkRole('SADM')){
                return true;
            }
        });

        Gate::define('Admin',function($user){
            return $user->checkRole('SADM');
        });

        Gate::define('MOD',function($user){
            return $user->checkRole('MOD');
        });

        Gate::define('VWR',function($user){
            return $user->checkRole('VWR');
        });

        Gate::define('USR',function($user){
            return $user->checkRole('USR');
        });


    }
}