<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('solo-admin', function (User $user) {
            return $user->rol->id != 1 ?
                Response::allow() :
                Response::deny('Sólo el administrador puede entrar.');
        });

        Gate::define('solo-superadmin', function (User $user) {
            return $user->rol->id == 3 ?
                Response::allow() :
                Response::deny('Sólo el super administrador puede entrar.');
        });
    }
}
