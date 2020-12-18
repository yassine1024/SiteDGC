<?php

namespace App\Http\Controllers;

use App\Contribution;
use App\Direction;
use App\Grivence;
use App\Mail\AcceptContribution;
use App\Mail\GrivenceOrderMark;
use App\TagGrivence;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function teste2(Request $request){

        foreach($request->except(['myTable_length','_token']) as $key => $value) {

            //dump($key, $value);

            $tagGrivence=TagGrivence::find($key);
            $tagGrivence->employee_comment=$value;
            $tagGrivence->save();

            return redirect()->route('admindoleance')
                ->with('success', trans('site.Les observations sont envoyées avec succès.'));

        }
        //dd("teste2........................");
    }
    public function teste(Request $request,$slug){
        $td=$request->all();
        $decoded = json_decode($slug, true);

        $i=1;$check="";
        foreach($decoded as $d) {
            foreach($d as $k=>$v) {
                if($i==1){
                    $check=$v;
                    $i=0;
                }else{
                    // grivenceID --- userID
                    //echo "".$check.$v;
                    $newGrivence =new TagGrivence();
                    $newGrivence->user_id=(int)$v;
                    $newGrivence->grivence_id=(int)$check;
                    $newGrivence->boss_comment=$td["rem".$check.$v];
                    $newGrivence->employee_comment="Aucune Observation";
                    $newGrivence->save();
                    $i=1;
                    $check="";

                    //send mail for each user grivence
                    $user=User::find((int)$v);
                        Mail::to($user->email)->send(new GrivenceOrderMark($user->name));

                }
                //echo "$k - $v\n";
            }
        }

        return redirect()->route('admindoleance')
            ->with('success', trans('site.Les remarques sont envoyées avec succès.'));
       // dd($slug);
    }

    public function accueil()
{
    /*if(Auth::User()->name!='adminimda'){
        return redirect(route('logout'));
    }*/
    return view('admin.admin');
}
    public function contrubit()
    {

        $contributions=Contribution::all();
        return view('admin.contribution',compact('contributions'));
    }
    public function dolean()
    {

        $grivences=Grivence::all();
        $usersDoleances=User::where('user_type',3)
            ->get();


        $allTagGrivences=TagGrivence::all();
        $hashTableStatueGrivences=[];
        //make the table of grivences not exist in tag -->not yet tag
        foreach ($grivences as $grivence){
            $hashTableStatueGrivences[$grivence->id]=false;
        }

        $hashTableTagGrivences=[];
        $hashTableTagUsers=[];
        foreach ($allTagGrivences as $allTagGrivence){
            $hashTableTagGrivences[$allTagGrivence->grivence_id.$allTagGrivence->user_id] = $allTagGrivence;
            $hashTableTagUsers[$allTagGrivence->grivence_id.$allTagGrivence->user_id]=User::find($allTagGrivence->user_id);
            $hashTableStatueGrivences[$allTagGrivence->grivence_id]=true;
        }

       /* if(array_key_exists(324,$hashTableTagGrivences)){
            dd("true");
        }*/
        //dd($hashTableTagGrivences,$hashTableTagUsers,$hashTableStatueGrivences);
        //$direction=Direction::find($grivences->direction_id);
        return view('admin.doleance',compact(['grivences','usersDoleances','hashTableTagGrivences','hashTableTagUsers','hashTableStatueGrivences']));
    }
    public function getDownload($file)
    {

                //$file_path = public_path('assets/download/'.$file_name);
        $file=storage_path('app\public\uploads\\'.$file);
        // dd($file);
                return response()->download($file);


    }


//added by yassine
public  function accepterContribution(Request $request,Contribution $contribution){
        //dd($contribution);

    $showDate=$request->input('showDate');

    $contribution->check="accepted";
    $contribution->show_date=$showDate;
    $contribution->save();

    $user=User::find($contribution->user_id);

    //dd($showDate,$contribution->publication_theme);444
    Mail::to($user->email)->send(new AcceptContribution($showDate,$contribution->publication_theme));
    return redirect()->route('adminecontributions')
        ->with('success', trans('site.La contribution a été accépter.'));

}
    public  function refuserContribution(Contribution $contribution){

        $contribution->check="refused";
        $contribution->save();
        return redirect()->route('adminecontributions')
            ->with('success', trans('site.La contribution a été refuser.'));
    }
}
