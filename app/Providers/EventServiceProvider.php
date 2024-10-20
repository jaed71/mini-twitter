<?php

namespace App\Providers;


use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use App\Listeners\RegisteredListener;


class EventServiceProvider extends ServiceProvider
{
 
    public function register(): void
    {
        
    }
    protected $listen = [
        Registered::class => [
            RegisteredListener::class,
        ],
    ];
  
    public function boot()
    {
        parent::boot();
    }
}
