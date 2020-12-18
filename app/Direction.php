<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    //
    public function tws(){

        return $this->hasMany('App\Tw');
    }
}
