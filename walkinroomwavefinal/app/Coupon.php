<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Database\Eloquent\Model;


class Coupon extends Model
{
    public function booking()
    {
        return $this->hasMany('App\Booking', 'coupon_id', 'id');
    }

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function userId()
    {
        return $this->belongsTo(Voyager::modelClass('User'), 'user_id', 'id');
    }
}
