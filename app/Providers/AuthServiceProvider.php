<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Policies\TaskPolicy;
use App\Policies\UserPolicy;
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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        'App\Models\User' => 'App\Policies\UserPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('user-view', [UserPolicy::class, 'view']);

        Gate::define('task-view', [TaskPolicy::class, 'view']);
        Gate::define('task-update', [TaskPolicy::class, 'update']);
        Gate::define('task-delete', [TaskPolicy::class, 'delete']);
    }
}
