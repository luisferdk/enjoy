<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Package extends Mailable
{
    use Queueable, SerializesModels;

    protected $package;

    public function __construct($package)
    {
        $this->package = $package;
    }
    public function build()
    {
        $de = "Renny Travel";
        $cc = "reservaciones@rennytraveldmc.com,rny998@hotmail.com";

        $bcc = "luisdk.03@gmail.com,latinosconganas@gmail.com";

        $cc = explode(',', $cc);
        $bcc = explode(',', $bcc);
        return $this->from("info@rennytours.com", $de)
            ->subject("Package Request")
            ->cc($cc)
            ->bcc($bcc)
            ->view("emails.package")
            ->with(["package" => $this->package]);
    }
}
