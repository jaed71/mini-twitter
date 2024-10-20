<?php

namespace App\Mail\User;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Auth\Authenticatable;
class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user; 
    //public $user; 
    public function __construct(Authenticatable $user)
    {
       
        $this->user = $user;
    }

   
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Welcome Email',
        );
    }

   
    public function build()
    {
        return $this->subject('Welcome to Mini Twitter')
                    ->view('emails.welcome') 
                    ->with([
                        'user' => $this->user, 
                    ]);
    }

 
    public function attachments(): array
    {
        return [];
    }
    
    
}
