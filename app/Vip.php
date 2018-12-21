<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Vip
 *
 * @property-read \App\Reservation $reservation
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vip newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vip query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $llegada_fecha
 * @property string $llegada_hora
 * @property string $llegada_aerolinea
 * @property string $llegada_vuelo
 * @property string $salida_fecha
 * @property string $salida_hora
 * @property string $salida_aerolinea
 * @property string $salida_vuelo
 * @property string $pasajeros
 * @property string $precio
 * @property int $estado
 * @property int $reservation_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vip whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vip whereEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vip whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vip whereLlegadaAerolinea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vip whereLlegadaFecha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vip whereLlegadaHora($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vip whereLlegadaVuelo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vip wherePasajeros($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vip wherePrecio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vip whereReservationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vip whereSalidaAerolinea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vip whereSalidaFecha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vip whereSalidaHora($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vip whereSalidaVuelo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vip whereUpdatedAt($value)
 */
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
