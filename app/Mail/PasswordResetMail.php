<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordResetMail extends Mailable
{
    use Queueable, SerializesModels;

    public $token;
    public $email;

    public function __construct($email, $token = null)
    {
        $this->email = $email;
        $this->token = $token;
    }

    public function build()
    {
        return $this->view('emails.password_reset') 
                    ->with([
                        'token' => $this->token,
                        'email' => $this->email,
                    ]);
    }
}
