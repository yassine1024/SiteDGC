<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Contribution extends Model
{
    //
    protected $fillable = [

        'gender',
        'last_name',
        'first_name',
        'birth_day',
        'degree',
        'function',
        'organization',
        'phone_number',
        'publication_theme',
        'description_publication',
        'file_name',
        'file_path',
        'user_id',
        'check'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
