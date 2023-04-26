<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\days;
use App\Models\Films;
use App\Models\Nums2s;
use App\Models\Nums;
use App\Models\Memos;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Throwable;

class FilmsController extends Controller
{


    public function lien(){
        return view('includes.lien');
    }

    public function lienwit(){
        return view('includes.lienwit');
    }

    public function index()
    {
        $films = Films::where('affiche', '=', 0)->where('news', '=', 0)->inRandomOrder()->limit(8)->get();
        $filmNew = Films::where('news', '=', 1)->where('affiche', '=', 0)->offset(0)->inRandomOrder()->limit(4)->get();
        $filmActuellement = Films::where('affiche', '=', 1)->offset(0)->inRandomOrder()->limit(8)->get();
        $days = days::all();
        
        return view('welcome', [
            //'films' c'est la variable utilisé dans le view et $films c'est la variable de la fonction 
            'films' => $films,
            'filmNew' => $filmNew,
            'filmAffiche' => $filmActuellement,
            'days' => $days,
        ]);
    }

    public function crud()
    {
        $nums = Nums::All();
        $nums2s = Nums2s::All();
   
        return view('backend', [
            'nums' => $nums,
            'nums2s' => $nums2s,
            
        ]);
    }

    
    public function crud2()
    {
        $nums2s = Nums2s::All();
       
   
        return view('backend2', [
            'nums2s' => $nums2s,
            
        ]);
    }


    public function crudee()
    {
        $films = Films::All();
        $categories = Categories::All();
   
        return view('includes.crudee', [
            'films' => $films,
            'categories' => $categories,
        ]);
    }



    public function create(Request $request)
    {
//dd($request);
          //chemin + nom image
        $nums = new Nums();
        $nums->Nom = $request->Nom;
        $nums->ninterne = $request->ninterne;
        $nums->nexterne = $request->nexterne;
        $nums->gpinterc = $request->gpinterc;
        $nums->gpdiff = $request->gpdiff;
       
        $nums->save();
       
        return redirect()->route('backend')->with('success', 'Numéro ajouté');
    }



    public function update(Request $request, $id)
    {
        $nums = Nums::find($id);
        $nums->Nom = $request->Nom;
        $nums->ninterne = $request->ninterne;
        $nums->nexterne = $request->nexterne;
        $nums->gpinterc = $request->gpinterc;
        $nums->gpdiff = $request->gpdiff;
       
        $nums->save();
       
        return redirect()->route('backend')->with('modifié', 'Numéro modifié');

    }


    public function delete($id)
    {
        $nums = Nums::where('id', '=', $id);
        $nums->delete();
        return redirect()->route('backend')->with('deleted', 'Numéro supprimé');
    }

//---------------------------------- NUMS2-------------------------------------//
public function createnums2(Request $request)
    {
//dd($request);
          //chemin + nom image
        $nums2s = new Nums2s();
        $nums2s->Nom = $request->Nom;
        $nums2s->ninterne = $request->ninterne;
        $nums2s->nexterne = $request->nexterne;
        $nums2s->gpinterc = $request->gpinterc;
        $nums2s->gpdiff = $request->gpdiff;
       
        $nums2s->save();
       
        return redirect()->route('backend')->with('success', 'Numéro ajouté');
    }



    public function updatenums2(Request $request, $id)
    {
        $nums2s = Nums2s::find($id);
        $nums2s->Nom = $request->Nom;
        $nums2s->ninterne = $request->ninterne;
        $nums2s->nexterne = $request->nexterne;
        $nums2s->gpinterc = $request->gpinterc;
        $nums2s->gpdiff = $request->gpdiff;
       
        $nums2s->save();
       
        return redirect()->route('backend')->with('modifié', 'Numéro modifié');

    }


    public function deletenums2($id)
    {
        $nums2s = Nums2s::where('id', '=', $id);
        $nums2s->delete();
        return redirect()->route('backend')->with('deleted', 'Numéro supprimé');
    }

//---------------------------------------------------------------------------------------------------------------------//

    public function show($id_film)
    {  
        $memos = Memos::all();
        $filma = Films::find($id_film);
        $days = days::all();
      
        
        return view('film', [
        'filma' => $filma,
        'memos' => $memos,
        'id' => $id_film,
        'days' => $days,
        
        
        ]);
    }

    public function search()
    {

        $search_text = $_GET['query'];
        $films = Films::where('titre', '=', $search_text)->get();
        return view('search', [
            'films' => $films,
        ]);
    }
    


    public function creatememo(Request $request)
    {
        try {

            $validate = $request->validate([
            'contenu' => 'required',
           

        ]);
       
       

        $memos = new Memos();
        $memos->user_id = Auth::id();
        $memos->id_film = $request->input('id');
        $memos->contenu = $request['contenu'];
      
        $memos->save();
      

    } catch (Throwable $e) {
        report($e);
        return redirect()->back()->with('status','Veuillez ajouter la video dans la biblioteque pour pouvoir insérer un memo.');

    }
    return redirect()->back();
    }


    public function updatememo(Request $request, $id)
    {

        $memos = Memos::where(['id_film'=>$id, 'user_id'=> $request->user_id])
        ->find($request->id_memos);
        if (isset($memos)) {
        $memos->id = $request->id_memos;
        $memos->user_id  = $request->user_id;
        $memos->id_film = $id;
        $memos->contenu = $request->contenu;
        $memos->save();
    }
    return redirect()->back()->with('modifié','Film modifié');
    }

    public function memodelete(Request $request)
    {

        $memos = Memos::where(['user_id'=> $request->user_id]);

       $memos=Memos::find($request->id_memos);
        $memos->delete();
        return redirect()->back();
    }

}
