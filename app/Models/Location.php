<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Location
 *
 * @property $id
 * @property $city
 * @property $created_at
 * @property $updated_at
 *
 * @property Hotel[] $hotels
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Location extends Model
{
    
    static $rules = [
		'city' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['city'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hotels()
    {
        return $this->hasMany('App\Models\Hotel', 'location_id', 'id');
    }
    

}
