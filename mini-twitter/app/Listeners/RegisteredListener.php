<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

//use App\Events\Registered;
use Illuminate\Auth\Events\Registered;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

class RegisteredListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Registered $event)
    {
        // Get the registered user from the event
        $user = $event->user;

        // Send the welcome email
        Mail::to($user->email)->send(new WelcomeEmail($user));
    }
}
