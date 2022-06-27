<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Database\Eloquent\Model;


class Roomdate extends Model
{
    protected $guarded = [];
    protected $fillable = ['room_id','user_id','check_in','check_out'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function room()
    {
        return $this->hasOne('App\Room', 'id', 'room_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->user_id && Auth::user()) {
            $this->user_id = Auth::user()->getKey();
        }

        return parent::save();
    }

    public function userId()
    {
        return $this->belongsTo(Voyager::modelClass('User'), 'user_id', 'id');
    }

    public function scopeCurrentUser($query)
    {
        return $query->where('user_id', Auth::user()->id);
    }

}
