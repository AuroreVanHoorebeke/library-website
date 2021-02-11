<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Role;
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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     * @param App\Models\User User $user
     * @param App\Models\Role Role $role
     * @return void
     */
    public function boot(User $user, Role $role)
    {
        $this->registerPolicies();

/*        Gate::define('user_access', function($user, $role){

        });*/

        /*Gate::define('update-post', function ($user, $post) {
            return $user->id == $post->user_id;
        });*/
    }
}
/*TODO clean document*/
