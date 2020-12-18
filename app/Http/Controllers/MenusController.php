<?php

namespace App\Http\Controllers;

use App\Direction;
use App\Grivence;
use App\Mail\GrivenceOrderMark;
use App\State;
use App\Town;
use App\Tw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MenusController extends Controller
{

    public function postDoleance(Request $request)
    {

        $grivence = new Grivence();

        $grivence->nom = $request->nom;
        //$grivence->prenom= $request->nom;
        $grivence->mail = $request->eemail;
        $grivence->object = $request->objet;
        $grivence->message = $request->message;


        $grivence->sector = $request->secteur;
        // $grivence->direction_id = -1;
        // $grivence->tw_id = -1;
        //$grivence->town_id = $request->exampleFormControlSelectTC;

        $grivence->direction_id =null;

        $grivence->tw_id = null;
        $grivence->town_id = null;


        if ($request->choiceDTC == 1) {
            $grivence->direction_id = $request->exampleFormControlSelectDRT;

        } else if ($request->choiceDTC == 2) {
            $grivence->direction_id = $request->exampleFormControlSelectDRT;

            $grivence->tw_id = $request->exampleFormControlSelectTW;

        } else if ($request->choiceDTC == 3) {
            $grivence->direction_id = $request->exampleFormControlSelectDRT;

            $grivence->tw_id = $request->exampleFormControlSelectTW;
            $grivence->town_id = $request->exampleFormControlSelectTC;


        }



        $grivence->save();
        Mail::to("Chakib.Elaidi@mf.gov.dz")->send(new GrivenceOrderMark("Chakib Elaidi"));

        return back()->with('success', 'La doléance a été enregistrer avec succés');
    }

    public
    function showRegsitre()
    {

        //récupérer les  wilaya pour faire le traitement
        $states = State::all();
        // $streets=State::find(1)->streets;


        /*$tws = Direction::find(11)->tws;
        dd($tws);*/
        $directions = Direction::all();
        $tws = Tw::all();
        $towns = Town::all();


//        $directions=Direction::all();
//        $directions = DB::table('directions')
//            ->join('tws', 'directions.id', '=', 'tws.direction_id')
//            ->get();
        return view('registreDoleances', compact(['directions', 'tws', 'towns', 'states']));
    }

//
    public
    function getAnnuaire()
    {
        return view('menus.annuaire');
    }

    public
    function rechercheRapide()
    {

        //$tws = Direction::find(11)->tws;
        $directions = Direction::all();
        $tws = Tw::all();
        $towns = Town::all();


//        $directions=Direction::all();
//        $directions = DB::table('directions')
//            ->join('tws', 'directions.id', '=', 'tws.direction_id')
//            ->get();
        return view('menus.annuaire', compact(['directions', 'tws', 'towns']));
    }

    public
    function showExample()
    {

        /*$tws = Direction::find(11)->tws;
        dd($tws);*/
        $directions = Direction::all();
        $tws = Tw::all();
        $towns = Town::all();


//        $directions=Direction::all();
//        $directions = DB::table('directions')
//            ->join('tws', 'directions.id', '=', 'tws.direction_id')
//            ->get();
        return view('example', compact(['directions', 'tws', 'towns']));
    }

// *************************************  begin of check slelected Item  ********************************************
    public
    function selectDRT(Request $request)
    {

        $drt = Direction::find($request->idDRT);
        $tws = Direction::find($request->idDRT)->tws;

        return response()->json(['success' => $tws, 'findDRT' => $drt]);
        //return response()->json(['success'=>'le résultat est '.$request->numid+1,'']);
    }

    public
    function selectTW(Request $request)
    {
        $tw = Tw::find($request->idTW);
        $tcs = Tw::find($request->idTW)->towns;

        return response()->json(['success' => $tcs, 'findTW' => $tw]);

    }

    public
    function selectTC(Request $request)
    {

        $tc = Town::find($request->idTC);


        return response()->json(['success' => $tc]);
        //return response()->json(['success'=>'le résultat est '.$request->numid+1]);
    }

    public
    function selectStreet(Request $request)
    {

        $tc = State::find($request->idStreet)->streets;


        return response()->json(['success' => $tc]);
        //return response()->json(['success'=>'le résultat est '.$request->numid+1]);
    }


//    *********************************** end of check selected Item *****************************************************
}
