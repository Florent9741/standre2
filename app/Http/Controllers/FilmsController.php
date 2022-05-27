<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Films;
use App\Models\films_categories;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FilmsController extends Controller
{

    public function index()
    {

        $films = Films::where('affiche', '=', 0)->limit(8)->get();
        $filma = Films::where('affiche', '=', 1)->offset(0)->limit(4)->get();

        return view('welcome', [
            //'films' c'est la variable utilisé dans le view et $films c'est la variable de la fonction 
            'films' => $films,
            'filma' => $filma,

        ]);
    }

    public function crud()
    {
        $films = Films::All();
        $categories = categories::All();
        return view('backend', [

            'films' => $films,
            'categories' => $categories,

        ]);
    }


    public function create(Request $request)
    {


        $path = Storage::disk('public')->put('img', $request->file('images'));    //chemin + nom image
        $film = new Films();
        $film->titre = $request->titre;
        $film->resume = $request->resume;
        $film->image = $path;
        $film->duree = $request->duree;
        $film->date = Now();
        $film->realisateur = $request->realisateur;
        $film->save();
        $film->categories()->attach($request->categorie);
        return redirect()->route('backend')->with('success', 'Film ajouté');
    }



    public function update(Request $request, $id_film)
    {

        $path = Storage::disk('public')->put('img', $request->file('images'));    //chemin + nom image
        $film = new Films();
        $film->titre = $request->titre;
        $film->resume = $request->resume;
        $film->image = $path;
        $film->duree = $request->duree;
        $film->date = Now();
        $film->realisateur = $request->realisateur;
        $film->update();
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

        $filma = Films::find($id_film);
        return view('film', [
            'filma' => $filma,


        ]);
    }

    public function shows($id_film)
    {

        $filma = Films::All()->where('id_film', '=', $id_film);


        return view('synopsis', [
            'filma' => $filma,


        ]);
    }
}
