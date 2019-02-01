<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Notification extends Mailable
{
    use Queueable, SerializesModels;

    protected $reservation;
    protected $reserv;

    public function __construct($reservation,$reserv)
    {
        $this->reservation = $reservation;
        $this->reserv = $reserv;
    }
    public function build()
    {
        $de = "Renny Travel";
        $cc = "reservaciones@rennytraveldmc.com,groups@rennytraveldmc.com,manager@rennytraveldmc.com,info@rennytravel.com,rny998@hotmail.com,operations@rennytraveldmc.com,rennytravel.reservas@gmail.com,salesassistant@rennytraveldmc.com,salesmanager@rennytraveldmc.com,operacionesrt@rennytraveldmc.com,operations@rennytraveldmc.com,contabilidad@rennytraveldmc.com,quality@rennytraveldmc.com,groupplanner@rennytraveldmc.com";

        $bcc = "luisdk.03@gmail.com,latinosconganas@gmail.com";

        $cc = explode(',', $cc);
        $bcc = explode(',', $bcc);

        return $this->from("info@rennytours.com", $de)
            ->subject("Reservation Nº ".$this->reservation->id)
            //->cc($cc)
           // ->bcc($bcc)
            ->view("emails.reservation")
            ->with(["reservation" => $this->reservation]);
    }
}
