<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tw extends Model
{
    //
    public  function direction(){

        return $this->belongsTo('App\Direction');
    }
    public  function towns(){

        return $this->hasMany('App\Town');
    }
}
