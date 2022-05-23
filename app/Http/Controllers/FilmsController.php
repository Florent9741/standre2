<?php

namespace App\Http\Controllers;

use App\Models\Films;
use Illuminate\Http\Request;

class FilmsController extends Controller
{

    public function index()
    {
        $films =Films::All();

        return view('welcome', [

            'films' => $films,

        ]);
    }

    public function crud()
    {
        $films =Films::All();

        return view('films', [

            'films' => $films,

        ]);
    }


    public function create()
    {
  
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
