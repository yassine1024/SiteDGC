<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfrastructuresController extends Controller
{
    public function accueil()
    {
        return view('infrastructures.infrastructures');

    }
}
