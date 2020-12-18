<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModernisationController extends Controller
{
    public function accueil()
    {
        return view('modernisation.modernisation');
    }
    public function reforme()
    {
        return view('modernisation.reforme');
    }
    public function modern()
    {
        return view('modernisation.modern');
    }
    public function systeme()
    {
        return view('modernisation.systeme');
    }
    public function getFileDownload()
    {


        $file_path = public_path('assets/download/'.$file_name);
        return response()->download($file_path);


    }
}
