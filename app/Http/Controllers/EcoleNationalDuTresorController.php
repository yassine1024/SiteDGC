<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcoleNationalDuTresorController extends Controller
{
    public function accueil()
    {
        return view('other.EcoleNationaleduTrésor.EcoleNationaleduTrésor');

    }
}
