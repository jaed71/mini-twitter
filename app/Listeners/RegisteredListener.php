<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use App\Mail\User\WelcomeEmail; 

use Illuminate\Support\Facades\Mail;

class RegisteredListener
{

    public function __construct()
    {
    
    }

 
    public function handle(Registered $event)
    {
        
        $user = $event->user;

        
        Mail::to($user->email)->send(new WelcomeEmail($user));
    }
}
