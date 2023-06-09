<?php

namespace App\Http\Controllers;

use App\Models\Films;
use Illuminate\Http\Request;


use App\Http\Requests\FilmsUpdateRequest;
use App\Models\days;

class horairesController extends Controller
{
    public function index()
  {
    $films = Films::all();
    
 
    return view('horaires.index', compact('films'));    
  }
 
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id_film)
  {

    // $films = Films::with('days')->find($id_film);
  
    // $days = $this->getDaysWithfilms($id_film);
    // return view('horaires.show', [
    // 'films' => $films,
    // 'days' => $days,
    // ]);

    $days = $this->getDaysWithfilms($id_film);
    $films = $this->getfilmById($id_film);
 
    return view('horaires.show', compact('days', 'films'));

  }
 
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id_film)
  {
    $days = $this->getDaysWithfilms($id_film);
    $films = $this->getfilmById($id_film);
    $index = 1;
 
    return view('horaires.edit', compact('days','films', 'index'));    
  }
 
  /**
   * Update the specified resource in storage.
   *
   * @param  FilmsUpdateRequest $restaurantUpdateRequest
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id_film)
  {
    // Mise à jour du nom
    $films = Films::find($id_film);
    $films->titre = $request->titre;
    $films->save();


        $rules = [
            'name' => 'required|max:255',
            'start.*' => 'date',
            'end.*' => 'date'
        ];
        dd($rules);
        $validated = $request->validate($rules);
    
 
    // Balayage et mise à jour des plages
    $starts = $validated['start'];
    $ends = $validated['end'];    
    $films->days()->detach();
    foreach ($starts as $key => $array){
      foreach ($array as $k => $value) {
        $films->days()->attach([$key => ['start_time' => $value, 'end_time' => $ends[$key][$k]]]);
      }
    }
 
    return response()->json();  
    
    
  }
 
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id_film)
  {
    $films = $this->getfilmsById($id_film);
    // Détachement des plages horaires
    $films->days()->detach();
    // Suppression du restaurant
    $films->delete();   
 
    return back(); 
  }
 
  protected function getDaysWithfilms($id_film) 
  {
    return days::with(['films' => function ($query) use($id_film) {
                $query->where('film_id', $id_film);
            }])->get();
  }
 
  protected function getfilmById($id_film)
  {
    return Films::find($id_film);
  }
   





}
