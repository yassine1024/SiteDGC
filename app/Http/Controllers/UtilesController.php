<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilesController extends Controller
{
    public function accueil()
    {
        return view('informationutiles.informationutiles');
    }
    public function paiement()
    {
        return view('paiementelectronique.paiementelectronique');
    }
    public function leschiffres()
    {
        return view('leschiffresdelasemaine.leschiffresdelasemaine');
    }
    public function document()
    {
        return view('document.document');
    }
    public function getFileDownload($file)
    {
        //$file_name='engagement_pret-vehicule_2.jpg';
        $file_path = public_path('assets\download\documents_pour-constitution_des_dossiers\\'.$file);
        return response()->download($file_path);


    }

}
