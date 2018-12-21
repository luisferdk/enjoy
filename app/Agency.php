<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $fillable = [
        'company_name',
        'company_type',
        'website',
        'street_address',
        'city',
        'zip',
        'state',
        'country',
        'title',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'status'
    ];
    protected $table = 'agencies';
}
