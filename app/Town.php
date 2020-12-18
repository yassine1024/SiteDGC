<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    //

    public function  tw(){
        $this->belongsTo('App\TW');
    }
}
