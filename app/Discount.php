<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $table = 'discounts';
    protected $fillable = ['percentage','init','end','agency_id','status'];

    public function agencies(){
        return $this->belongsTo('App\Agency');
    }
}
