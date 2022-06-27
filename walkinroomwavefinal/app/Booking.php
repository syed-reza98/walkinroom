<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;


class Booking extends Model
{
    public function coupon()
    {
        return $this->hasOne('App\Coupon', 'id', 'coupon_id');
    }

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
