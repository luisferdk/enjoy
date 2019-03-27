<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
      "fecha_inicio",
      "fecha_fin",
      "hotel",
      "adultos",
      "ninos",
      "precio",
      "reservation_id"
    ];

    public function reservation(){
		return $this->belongsTo(Reservation::class,'reservation_id',"id");
	}
}
