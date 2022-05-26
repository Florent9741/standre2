<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Films;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FilmsController extends Controller
{

    public function index()
    {
        $categories = Categories::All();
        $films = Films::with('categories')->where('affiche', '=', 0)->get();
        $filma = Films::where('affiche', '=', 1)->offset(0)->limit(4)->get();

        return view('welcome', [
            //'films' c'est la variable utilisé dans le view et $films c'est la variable de la fonction 
            'films' => $films,
            'categories' => $categories,
            'filma' => $filma,
   

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


    public function create(Request $request)
    {
   
            $name = Storage::disk('public')->put('img', $request->file('images'));    //chemin + nom image
            $film = Films::create([
                'titre' => $request->titre,
                'resume' => $request->resume,
                'date' => NOW(),
                'id_categorie'  => $request->id_categorie,
                'realisateur' => $request->realisateur,
                'duree' => $request->duree,
                'image' => $name,
            ]);

            $newfilm = new Films();
            $newfilm->image = $name;
            $film->save();
   
     
        return redirect()->route('backend')->with('success','Film ajouté');

    }



    public function update(Request $request, $id_film)
    {
  
        $name = Storage::disk('public')->put('img', $request->file('images'));    //chemin + nom image
        $film = Films::where('id_film', '=', $id_film);
        $film->update([
            'titre' => $request->titre,
            'resume' => $request->resume,
            'date' => NOW(),
            'id_categorie'  => $request->id_categorie,
            'realisateur' => $request->realisateur,
            'duree' => $request->duree,
            'image' => $name,
        ]);

    return redirect()->route('backend')->with('modifié','Film modifié');
    
    }


    public function delete($id_film)
    {
        $film = Films::where('id_film', '=', $id_film);
        $film->delete();
        return redirect()->route('backend')->with('deleted','Film supprimé');
}

}