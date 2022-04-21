<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Room
 *
 * @property $id
 * @property $hotel_id
 * @property $user_id
 * @property $title
 * @property $description
 * @property $type
 * @property $capacity
 * @property $availability
 * @property $price
 * @property $created_at
 * @property $updated_at
 *
 * @property Hotel $hotel
 * @property Roomdate[] $roomdates
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Room extends Model
{

    static $rules = [
		'hotel_id' => 'required',
		'user_id' => 'required',
		'title' => 'required',
		'description' => 'required',
		'type' => 'required',
		'capacity' => 'required',
		'availability' => 'required',
		'price' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['hotel_id','user_id','title','description','type','capacity','availability','price'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function hotel()
    {
        return $this->hasOne('App\Models\Hotel', 'id', 'hotel_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roomdates()
    {
        return $this->hasMany('App\Models\Roomdate', 'room_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    // public function photos()
    // {
    //     return $this->belongsTo('App\Models\Photo', 'room_id', 'id');
    // }


}
