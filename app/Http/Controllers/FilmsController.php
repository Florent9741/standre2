<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Films;
use Illuminate\Http\Request;

class FilmsController extends Controller
{

    public function index()
    {
        $categories= Categories::All();
        $films =Films::with('categories')->get();

        return view('welcome',['films' => $films, 'categories'=>$categories]);
    }

    public function crud()
    {
        $films =Films::All();

        return view('films', [

            'films' => $films,

        ]);
    }


    public function Create(Request $request)
    {
        //dd($request);
        //dd($request->input)
       // $livre = new Livres();
       // $livre->titre = $request->titre;
      //  $livre->contenu = $request->contenu;
      //  $livre->save();

        $request->validate([
            'titre' => 'required|max:255',
            'contenu' => 'required',

        ]);
       
        Films::create([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'id_auteurs'  => $request->auteur,
        ]);

        return redirect()->route('livres');
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
