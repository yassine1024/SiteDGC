<?php

namespace App\Http\Controllers;

use App\Contribution;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CallForContributionController extends Controller
{
    //

    public function __construct()
    {
        //Chek if the user authenticated
        /*if(Auth::check()){
            dd("The user is signing");
        }else{
            // dd("Show the sign in vue");
            return redirect(route('register'));
        }*/
        $this->middleware(['auth','verified']);
    }

    //index page ===> show the list of contributions
    public function index()
    {
       // $contributions=Contribution::find(Auth::id());
        $contributions=User::find(Auth::id())->contributions()->paginate(5);
       // dd($contributions);
      //  $contributions=$contributions1->contributions()->paginate(5);
        //$contributions = Contribution::latest()->paginate(5);

        return view('contributions.index', compact('contributions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        // return view('contributions.index');
    }

    //create a new contribution
    public function create()
    {
        return view('contributions.create');
    }

    //store the new contribution
    public function store(Request $request)
    {

        $request->validate([
            // 'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'firstName' => ['required', 'string', 'max:255'],
            'birthDay' => ['required', 'date', 'max:255'],
            'degree' => ['required', 'string', 'max:255'],
            'function' => ['required', 'string', 'max:255'],
            'organization' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'publication_theme' => ['required', 'string', 'max:255'],
        ]);


        $contibution = new Contribution();

        //configure the data of file
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');


        //store the data in DB
        $contibution->gender = $request->optradio;
        $contibution->last_name = $request->name;
        $contibution->first_name = $request->firstName;
        $contibution->birth_day = $request->birthDay;
        $contibution->degree = $request->degree;
        $contibution->function = $request->function;
        $contibution->organization = $request->organization;
        $contibution->phone_number = $request->phone;
        $contibution->publication_theme = $request->publication_theme;
        $contibution->description_publication = $request->comment;
        $contibution->file_name = $fileName;
        $contibution->file_path = $filePath;
        $contibution->user_id = Auth::id();
        $contibution->check = "under verification";
        $contibution->show_date="2100-01-01";
        $contibution->save();


        //return to the page index
        return redirect()->route('contributions.index')
            ->with('success', trans('site.La contribution a été ajouté avec succès.'));


    }

//show a given contribution
    public function show(Contribution $contribution)
    {
        // return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
//    edit a given contribution by given you the view only
    public function edit(Contribution $contribution)
    {
        //dd($contribution);
          return view('contributions.edit',compact('contribution'));
    }

//update the contribution edited by the edit view
    public function update(Request $request, Contribution $contribution)
    {
       /* $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');*/

        $request->validate([
            // 'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'firstName' => ['required', 'string', 'max:255'],
            'birthDay' => ['required', 'date', 'max:255'],
            'degree' => ['required', 'string', 'max:255'],
            'function' => ['required', 'string', 'max:255'],
            'organization' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'publication_theme' => ['required', 'string', 'max:255'],
        ]);
//Update the data in DB
        $contribution->gender = $request->optradio;
        $contribution->last_name = $request->name;
        $contribution->first_name = $request->firstName;
        $contribution->birth_day = $request->birthDay;
        $contribution->degree = $request->degree;
        $contribution->function = $request->function;
        $contribution->organization = $request->organization;
        $contribution->phone_number = $request->phone;
        $contribution->publication_theme = $request->publication_theme;
        $contribution->description_publication = $request->comment;


        $contribution->save();
        return redirect()->route('contributions.index')
            ->with('success', 'Contribution mis à jour avec succès');
    }


//    delete a given article
    public function destroy(Contribution $contribution)
    {

        //dete the file.zip
        //dd($contribution->file_path);
       // dd(Storage::disk('local')->exists($contribution->file_path));
        Storage::delete('public/'.$contribution->file_path);

        $contribution->delete();


         return redirect()->route('contributions.index')
             ->with('success','Contribution supprimer avec succès');

    }


}