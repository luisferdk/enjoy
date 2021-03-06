<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserRegister extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $de = "Punta Cana Enjoyment";
        return $this->from("info@puntacanaenjoyment.com", $de)
            ->subject("Register a new user ")
            //->cc($cc)
            // ->bcc($bcc)
            ->view("emails.userregis")
            ->with(["user" => $this->user]);
    }
}
