<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Films;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class FilmsController extends Controller
{

    public function index()
    {
        $categories = Categories::All();
        $films = Films::with('categories')->where('affiche', '=', 0)->get();
        $filma = Films::where('affiche', '=', 1)->offset(0)->limit(5)->get();

        return view('welcome', [
            //'films' c'est la variable utilisé dans le view et $film c'est ma variable de fonction 
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

        return redirect()->route('backend');
    }


    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }


    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }


    public function destroy($id)
    {
    }
}
