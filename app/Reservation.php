<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Reservation
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Tour[] $tours
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Transfer[] $transfers
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Vip[] $vips
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Wifi[] $wifis
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $correo
 * @property string|null $telefono
 * @property string|null $comentarios
 * @property float $precio
 * @property int $estado
 * @property string|null $id_pago
 * @property string|null $hotel
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereApellido($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereComentarios($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereCorreo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereHotel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereIdPago($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation wherePrecio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereTelefono($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereUpdatedAt($value)
 */
class Reservation extends Model
{
    protected $fillable=[
		"nombre",
		"apellido",
		"correo",
		"telefono",
		"comentarios",
		"precio",
		"hotel",
		"id_pago"
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
	
		public function wifis(){
    	return $this->hasMany(Wifi::class,'reservation_id','id');
		}
		
		public function flights(){
    	return $this->hasMany(Flight::class,'reservation_id','id');
    }
}
