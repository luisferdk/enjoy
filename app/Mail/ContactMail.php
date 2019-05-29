<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
    public function build()
    {
        $de = $this->data['name'];
        $bcc = "luisjosedeveloper@gmail.com";

        return $this->from("info@puntacanaenjoyment.com", $de)
            ->subject('Contact Us '.$this->data['name'])
            //->cc($cc)
            ->bcc($bcc)
            ->view("emails.contactUs")
            ->with(["data" => $this->data]);
    }
}
