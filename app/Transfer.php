<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $fillable = [
		"de",
		"para",
		"pasajeros",
		"tipo",
		"llegada_fecha",
		"llegada_hora",
		"llegada_aerolinea",
		"llegada_vuelo",
		"salida_fecha",
		"salida_hora",
		"salida_aerolinea",
		"salida_vuelo",
		"precio",
		"vip",
		"cervezas",
		"sodas",
		"vino",
		"champagne",
		"reservation_id"
    ];

    public function reservation(){
		return $this->belongsTo(Reservation::class,'reservation_id',"id");
	}
}
