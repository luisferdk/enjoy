<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AgencyConfirmed extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $pass;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$pass)
    {
        $this->name = $name;
        $this->email = $email;
        $this->pass  = $pass;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.agencyCon')->subject('Agency confirmed');
    }
}
