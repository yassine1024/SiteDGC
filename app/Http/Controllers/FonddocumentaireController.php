<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FonddocumentaireController extends Controller
{
    public function accueil()
    {
        return view('other.Fonddocumentaire.Fonddocumentaire');
    }
    public function getFileDownload()
    {

        $file_path = public_path('assets/download/fond_documentaire'.$file_name);
        return response()->download($file_path);


    }
}
