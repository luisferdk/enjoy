<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
		"origen",
		"destino",
		"fecha",
		"pasajeros",
		"avion",
		"tiempo",
		"capacidad",
		"precio",
    	"reservation_id"
    ];

    public function reservation(){
        return $this->belongsTo(Reservation::class,'reservation_id',"id");
    }
}
