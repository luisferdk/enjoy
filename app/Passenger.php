<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $fillable = [
        "passport",
        "full_name",
        "phone_number",
        "email",
        "nacionalization",
        "age",
        "flight_id"
    ];
}
