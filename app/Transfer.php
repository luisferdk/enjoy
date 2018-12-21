<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Transfer
 *
 * @property-read \App\Reservation $reservation
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $de
 * @property string $para
 * @property string $pasajeros
 * @property string $tipo
 * @property string|null $llegada_fecha
 * @property string|null $llegada_hora
 * @property string|null $llegada_aerolinea
 * @property string|null $llegada_vuelo
 * @property string|null $salida_fecha
 * @property string|null $salida_hora
 * @property string|null $salida_aerolinea
 * @property string|null $salida_vuelo
 * @property float $precio
 * @property string|null $vip
 * @property string|null $cervezas
 * @property string|null $sodas
 * @property string|null $vino
 * @property string|null $champagne
 * @property int $estado
 * @property int $reservation_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereCervezas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereChampagne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereDe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereLlegadaAerolinea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereLlegadaFecha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereLlegadaHora($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereLlegadaVuelo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer wherePara($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer wherePasajeros($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer wherePrecio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereReservationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereSalidaAerolinea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereSalidaFecha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereSalidaHora($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereSalidaVuelo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereSodas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereTipo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereVino($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Transfer whereVip($value)
 */
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
