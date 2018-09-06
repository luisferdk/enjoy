<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = [
    	"tour",
    	"modalidad",
    	"fecha",
    	"horario",
    	"adultos",
		"ninos",
    	"precio",
    	"reservation_id"
    ];

    public function reservation(){
        return $this->belongsTo(Reservation::class,'reservation_id',"id");
    }
}
