<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeriscopeController extends Controller
{
    public function accueil()
    {
        return view('PeriscopeDGC.PeriscopeDGC');
    }
}
