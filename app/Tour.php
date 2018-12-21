<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Tour
 *
 * @property-read \App\Reservation $reservation
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tour query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $tour
 * @property string|null $modalidad
 * @property string $fecha
 * @property string|null $horario
 * @property string $adultos
 * @property string|null $ninos
 * @property float $precio
 * @property int $estado
 * @property int $reservation_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tour whereAdultos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tour whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tour whereEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tour whereFecha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tour whereHorario($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tour whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tour whereModalidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tour whereNinos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tour wherePrecio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tour whereReservationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tour whereTour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tour whereUpdatedAt($value)
 */
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
