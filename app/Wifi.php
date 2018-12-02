<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wifi extends Model
{
    protected $fillable =[
        "dias",
        "llegada_fecha",
        "llegada_hora",
        "llegada_aerolinea",
        "llegada_vuelo",
        "salida_fecha",
        "salida_hora",
        "salida_aerolinea",
        "salida_vuelo",
        "dispositivos",
        "hotel",
        "precio",
        "reservation_id"
    ];

    public function reservation(){
		return $this->belongsTo(Reservation::class,'reservation_id',"id");
	}
}
