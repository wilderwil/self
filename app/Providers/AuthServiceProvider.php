<?php

namespace App\Providers;

use App\Models\User;
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
         'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('haveaccess',function(User $user){
            return true;
        });
               // Implicitly grant "Super-Admin" role all permission checks using can()
       Gate::before(function ($user, $ability) {
        if ($user->hasRole('Administrador')) {
            return true;
        }
    });
        //
    }
}
