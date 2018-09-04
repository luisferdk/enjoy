<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vip extends Model
{
	protected $fillable = [
		"precio",
		"pasajeros",
		"llegada_fecha",
		"llegada_hora",
		"llegada_aerolinea",
		"llegada_vuelo",
		"salida_fecha",
		"salida_hora",
		"salida_aerolinea",
		"salida_vuelo",
		"reservation_id"
	];

	public function reservation(){
		return $this->belongsTo(Reservation::class,'reservation_id',"id");
	}
}
