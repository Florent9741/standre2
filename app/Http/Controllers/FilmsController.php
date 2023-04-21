<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\days;
use App\Models\Films;
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
        $films = Films::All();
        $categories = Categories::All();
   
        return view('backend', [
            'films' => $films,
            'categories' => $categories,
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
        $path = Storage::disk('public')->put('img', $request->file('images'));    //chemin + nom image
        $film = new Films();
        $film->titre = $request->titre;
        $film->name = $request->name;
        $film->affiche = $request->affiche;
        $film->bandeannonce = $request->bandeannonce;
        $film->resume = $request->resume;
        $film->image = $path;
        $film->duree = $request->duree;
        $film->news = $request->news;
        $film->date = $request->date;
        $film->realisateur = $request->realisateur;
        $film->save();
        $film->categories()->attach($request->categorie);
        return redirect()->route('backend')->with('success', 'Film ajouté');
    }



    public function update(Request $request, $id_film)
    {
        $path = Storage::disk('public')->put('img', $request->file('images'));    //chemin + nom image
        $film = Films::find($id_film);
        $film->titre = $request->titre;
        $film->name = $request->name;
        $film->affiche = $request->affiche;
        $film->bandeannonce = $request->bandeannonce;
        $film->resume = $request->resume;
        $film->image = $path;
        $film->duree = $request->duree;
        $film->news = $request->news;
        $film->date = $request->date;
        $film->realisateur = $request->realisateur;
        $film->categories()->sync($request->categories);
        $film->save();
        $film->categories()->attach($request->categorie);
        return redirect()->route('backend')->with('modifié', 'Film modifié');

    }


    public function delete($id_film)
    {
        $film = Films::where('id_film', '=', $id_film);
        $film->delete();
        return redirect()->route('backend')->with('deleted', 'Film supprimé');
    }




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
