<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Roomdate
 *
 * @property $id
 * @property $room_id
 * @property $user_id
 * @property $check_in
 * @property $check_out
 * @property $created_at
 * @property $updated_at
 *
 * @property Room $room
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Roomdate extends Model
{
    
    static $rules = [
		'room_id' => 'required',
		'user_id' => 'required',
		'check_in' => 'required',
		'check_out' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['room_id','user_id','check_in','check_out'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function room()
    {
        return $this->hasOne('App\Models\Room', 'id', 'room_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
