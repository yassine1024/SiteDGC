<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhosdgcController extends Controller
{
    //

    public function getInfo(){
        //$page='';
        return view('WhosDGC.whosDGC');
    }
}
