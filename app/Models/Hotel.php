<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hotel
 *
 * @property $id
 * @property $user_id
 * @property $location_id
 * @property $name
 * @property $description
 * @property $location
 * @property $address
 * @property $star
 * @property $roomQuantity
 * @property $created_at
 * @property $updated_at
 *
 * @property Location $location
 * @property Room[] $rooms
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Hotel extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'location_id' => 'required',
		'name' => 'required',
		'description' => 'required',
		'location' => 'required',
		'address' => 'required',
		'star' => 'required',
		'roomQuantity' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','location_id','name','description','location','address','star','roomQuantity'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function location()
    {
        return $this->hasOne('App\Models\Location', 'id', 'location_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rooms()
    {
        return $this->hasMany('App\Models\Room', 'hotel_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
