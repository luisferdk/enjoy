<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
