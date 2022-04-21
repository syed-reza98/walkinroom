<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Photo
 *
 * @property $id
 * @property $room_id
 * @property $title
 * @property $path
 * @property $created_at
 * @property $updated_at
 *
 * @property Room $room
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Photo extends Model
{

    static $rules = [
		'room_id' => 'required',
		'title' => 'required',
		'path' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['room_id','title','path'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function room()
    {
        return $this->hasOne('App\Models\Room', 'id', 'room_id');
    }


}
