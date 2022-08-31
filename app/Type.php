<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Type extends Model
{
    protected $guarded = [];
    protected $fillable = ['id','title','image'];
    public function rooms()
    {
        return $this->hasMany('App\Room', 'type_id', 'id');
    }
}
