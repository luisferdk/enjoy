<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Discount
 *
 * @property int $id
 * @property float $percentage
 * @property string $init
 * @property string $end
 * @property int $agency_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $status
 * @property-read \App\Agency $agencies
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount whereAgencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount whereInit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount wherePercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Discount whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Discount extends Model
{
    protected $table = 'discounts';
    protected $fillable = ['percentage','init','end','agency_id','status'];

    public function agencies(){
        return $this->belongsTo('App\Agency');
    }
}
