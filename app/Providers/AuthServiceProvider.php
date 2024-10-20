<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        
    }
    protected $policies = [
        
    ];

   
    public function boot(): void
    {
        
        $this->registerPolicies();
    }
}
