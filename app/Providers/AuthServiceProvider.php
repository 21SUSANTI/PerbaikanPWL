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

        Gate::define('manage-siswa', function($user){
            return $user->roles == "Administrator";
           });
        
        Gate::define('manage-guru', function($user){
            return $user->roles == "Administrator";
           });

        Gate::define('manage-fotoguru', function($user){
            return $user->roles == "Administrator";
           });

        Gate::define('manage-rapot', function($user){
            return $user->roles == "Administrator";
        });

        Gate::define('user', function($user){       
            return $user->roles == "User"; 
        }); 
        
        Gate::define('user-home', function($user){       
            return $user->roles == "User"; 
        }); 

        Gate::define('user-home1', function($user){       
            return $user->roles == "User"; 
        }); 
        
        Gate::define('user-kelas', function($user){
            return $user->roles == "User";
           });
        
        Gate::define('user-tunjangan', function($user){       
            return $user->roles == "User"; 
        }); 

        Gate::define('user-ekstrakulikuler', function($user){       
            return $user->roles == "User"; 
        }); 

        Gate::define('user-prestasi', function($user){       
            return $user->roles == "User"; 
        }); 

        Gate::define('manage-fotoguru1', function($user){       
            return $user->roles == "User"; 
        }); 
    }
}
