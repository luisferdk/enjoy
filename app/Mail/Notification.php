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

    public function __construct($reservation)
    {
        $this->reservation = $reservation;
    }
    public function build()
    {
        $de = "Punta Cana Enjoyment";
        $bcc = "luisdk.03@gmail.com,latinosconganas@gmail.com";
        $bcc = explode(',', $bcc);

        return $this->from("info@puntacanaenjoyment.com", $de)
            ->subject("Reservation Nº ".$this->reservation->id)
            //->cc($cc)
           // ->bcc($bcc)
            ->view("emails.reservation")
            ->with(["reservation" => $this->reservation]);
    }
}
