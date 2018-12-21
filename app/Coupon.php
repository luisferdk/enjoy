<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Coupon
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Coupon query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $code
 * @property float $percentage
 * @property string $date_init
 * @property string $date_end
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $status
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Coupon whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Coupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Coupon whereDateEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Coupon whereDateInit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Coupon whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Coupon wherePercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Coupon whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Coupon whereUpdatedAt($value)
 */
class Coupon extends Model
{
    protected $table = 'coupons';
    protected $fillable = [
        'code',
        'percentage',
        'date_init',
        'date_end',
        'status',
        'name'
    ];
}
