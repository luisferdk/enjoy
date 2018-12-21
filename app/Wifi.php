<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Wifi
 *
 * @property-read \App\Reservation $reservation
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Wifi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Wifi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Wifi query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $dias
 * @property string $llegada_fecha
 * @property string $llegada_hora
 * @property string $llegada_aerolinea
 * @property string $llegada_vuelo
 * @property string $salida_fecha
 * @property string $salida_hora
 * @property string $salida_aerolinea
 * @property string $salida_vuelo
 * @property int $dispositivos
 * @property string $hotel
 * @property float $precio
 * @property int $estado
 * @property int $reservation_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Wifi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Wifi whereDias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Wifi whereDispositivos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Wifi whereEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Wifi whereHotel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Wifi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Wifi whereLlegadaAerolinea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Wifi whereLlegadaFecha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Wifi whereLlegadaHora($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Wifi whereLlegadaVuelo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Wifi wherePrecio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Wifi whereReservationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Wifi whereSalidaAerolinea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Wifi whereSalidaFecha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Wifi whereSalidaHora($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Wifi whereSalidaVuelo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Wifi whereUpdatedAt($value)
 */
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
