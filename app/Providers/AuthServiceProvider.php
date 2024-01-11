<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    
    protected $policies = [
        //
    ];

    // Gates
    public function boot(): void
    {
        $this->registerPolicies();
        // https://laravel.com/docs/9.x/authorization#writing-gates

        // El usuario con perfil admin solo puede realizar la
        // gestión (CRUD) de organizadores
        Gate::define('manage-organizators', function (User $user)
        {
            return $user->role->slug === "administrador";
        });
        // El usuario con perfil admin solo puede realizar la
        // gestión (CRUD) de estudiantes
        Gate::define('manage-studens', function (User $user)
        {
            return $user->role->slug === "administrador";
        });
        


    }
}
