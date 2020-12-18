<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {

    //dd(bcrypt('(a+b)==(b+a);'));
    //Chek if the user authenticated
    if(Auth::check()){
        return \Illuminate\Support\Facades\Redirect::to('/home');
    }else{
        // dd("Show the sign in vue");
        return view('home.home');
    }


})->name('home')->middleware('first');


Route::get('/loiDeBudguter', function () {

    return view('budgetRegulationLaw.budgetRegulationLaw');

})->name('loiDeBudguter');
Route::get('/tableauDeBord', function () {

    return view('dashboardStatistics.dashboardStatistics');

})->name('tableauDeBord');

Route::get('/descriptionContribution', function () {
    //dd("bienvenu","Tableau de bord","vide...");

    if(Illuminate\Support\Facades\Auth::check()){
        return redirect(route('contributions.index'));
    }
    return view('home.subContribution');
})->name('descriptionContribution');
Route::get('locale/{lang}', function ($lang) {

//    \App::setLocale($lang);
    session(['my_locale' => $lang]);

   // dd( \Illuminate\Support\Facades\Session::get('my_locale'));
    //dd(\App::getLocale());
    return back();
  //  return redirect()->route('home');
    //
})->middleware('first');

Route::get('/login/{tags}','HomeController@login')->name('login');

Auth::routes(['verify' => true]);
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('homme');


Route::get('/annuaire', 'MenusController@getAnnuaire');

Route::get('/annuaire/check', 'MenusController@rechercheRapide');
Route::get('/example', 'MenusController@showExample')->name('annuaire')->middleware('first');
Route::get('/registreDoleances', 'MenusController@showRegsitre')->name('registreDoleances')->middleware('first');

Route::post('/postDoleance', 'MenusController@postDoleance')->name('postDoleance')->middleware('first');
//Route::get('/postDoleance', 'MenusController@postDoleance')->name('postDoleance')->middleware('first');

Route::get('/selectDRT', 'MenusController@selectDRT');
Route::get('/selectTW', 'MenusController@selectTW');
Route::get('/selectTC', 'MenusController@selectTC');
Route::get('/selectStreet', 'MenusController@selectStreet');

///#####WhosDGC routes *******************//////////
///
Route::get('/whosdgcInfo', 'WhosdgcController@getInfo')->name('whosdgcInfo');
//////*************WhosDGC routes *******************//////////

/////////// Coute Admin ///////////////////////
Route::get('/admin', 'AdminController@accueil')->name('admineAccueil');
Route::get('/contribution', 'AdminController@contrubit')->name('adminecontributions');
Route::get('/doleance', 'AdminController@dolean')->name('admindoleance');
Route::get('/contribution/uploads/{file}', 'AdminController@getDownload')->name('download_file');
//added by yassine
Route::post('/accepterContribution/{contribution}','AdminController@accepterContribution')->name('accepterContribution');
Route::get('/accepterContribution/{contribution}','AdminController@accepterContribution')->name('accepterContribution');

Route::post('/refuserContribution/{contribution}','AdminController@refuserContribution')->name('refuserContribution');
Route::get('/refuserContribution/{contribution}','AdminController@refuserContribution')->name('refuserContribution');

Route::post('/teste/{slug}','AdminController@teste')->name('teste');
Route::post('/teste2','AdminController@teste2')->name('teste2');
/// /////// End Admin ////////////////////////

//////////////// information utiles /////////////////////
///
Route::get('/informationutiles', 'UtilesController@accueil')->name('utiles');
Route::get('/paiementelectronique', 'UtilesController@paiement')->name('paiementelectronique');
Route::get('/leschiffresdelasemaine', 'UtilesController@leschiffres')->name('leschiffresdelasemaine');
Route::get('/documentsconstitution', 'UtilesController@document')->name('document');
Route::get('/documentsconstitution/{file}', 'UtilesController@getFileDownload')->name('documenttt');

/// ////////////// end of information utiles ////////////////////

//////////////// Periscope de la DGC /////////////////////
///
Route::get('/PeriscopeDGC', 'PeriscopeController@accueil')->name('periscope');

/// ////////////// Periscope de la DGC ////////////////////


/// /////////////// modernisation /////////////////////////

Route::get('/modernisation', 'ModernisationController@accueil')->name('modernisation');
Route::get('/reforme', 'ModernisationController@reforme')->name('reformee');
Route::get('/modern', 'ModernisationController@modern')->name('modernn');
Route::get('/systeme', 'ModernisationController@systeme')->name('system');
Route::get('/reforme/{file}', 'ModernisationController@getFileDownload');


/// ///////////// End of Modernisation //////////////////////
///
/////////////////// Reglementation /////////////////////////
Route::get('/reglementation', 'ReglementationController@accueil')->name('reglementation');
Route::get('/circulaires', 'ReglementationController@circulair')->name('circulaires');
Route::get('/instructions', 'ReglementationController@instruct')->name('instructions');
Route::get('/receuildetextes', 'ReglementationController@receuil')->name('receuil');
Route::get('/circulaires/{file}', 'ReglementationController@getFileDownload');

/// ////////// End of Reglementation //////////////////////


//--------------------CALL FOR CONTRIBUTION PAGE--------------------------
//Route::get('/callForContribution', 'CallForContributionController@addContribution')->name('callForContribution');
//all routes of CRUD for callForContribution
//Route::res
Route::resource('contributions','CallForContributionController')->middleware('first');
//--------------------END CALL FOR CONTRIBUTION PAGE----------------------

/////////////////////// other //////////////////////////////////
Route::get('/fonddocumentaire', 'FonddocumentaireController@accueil')->name('fonddocumentaire');
Route::get('/fonddocumentaire/{file}', 'FonddocumentaireController@getFileDownload');
Route::get('/infrastructures', 'InfrastructuresController@accueil')->name('infrastructures');
Route::get('/ecolenationaledutrésor', 'EcoleNationalDuTresorController@accueil')->name('ecolenationaledutrésor');


////////////////////// end other //////////////////////////


Route::get('/mail', 'OrderController@ship');
Route::post('/mail', 'OrderController@ship');
