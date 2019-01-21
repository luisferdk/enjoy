<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Agency
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Agency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Agency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Agency query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $company_name
 * @property string $company_type
 * @property string $website
 * @property string $street_address
 * @property string $city
 * @property string $zip
 * @property string $state
 * @property string $country
 * @property string $title
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone_number
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Agency whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Agency whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Agency whereCompanyType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Agency whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Agency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Agency whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Agency whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Agency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Agency whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Agency wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Agency whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Agency whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Agency whereStreetAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Agency whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Agency whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Agency whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Agency whereZip($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Discount[] $discounts
 */
class Agency extends Model
{
    protected $table = 'agencies';
    protected $fillable = [
        'lata_number',
        'postal_code',
        'host_agency_name',
        'industry_market',
        'comment',
        'address',
        'email',
        'phone_number',
        'status'
    ];

    public function discounts(){
        return $this->hasMany('App\Discount');
    }
}
