<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReglementationController extends Controller
{
    public function accueil()
    {
        return view('reglementation.reglementation');
    }
    public function circulair()
    {
        return view('reglementation.circulaires');
    }
    public function instruct()
    {
        return view('reglementation.instructions');
    }
    public function receuil()
    {
        return view('reglementation.receuildetextes');
    }
    public function getFileDownload()
    {
        $file_path = public_path('assets/download/'.$file_name);
        return response()->download($file_path);
    }

}
