<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagGrivence extends Model
{
    //
    protected $fillable = [
        'boss_comment', 'employee_comment', 'user_id', 'grivence_id'
    ];
}
