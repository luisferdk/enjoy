<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable=[
		"nombre",
		"apellido",
		"correo",
		"telefono",
		"comentarios",
		"precio"
    ];

    public function tours(){
    	return $this->hasMany(Tour::class,'reservation_id','id');
    }

    public function transfers(){
    	return $this->hasMany(Transfer::class,'reservation_id','id');
    }

    public function vips(){
    	return $this->hasMany(Vip::class,'reservation_id','id');
    }
}
