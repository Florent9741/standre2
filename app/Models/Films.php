<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $primaryKey = 'id_film';
    protected $fillable = ['titre', 'resume', 'duree', 'date', 'image',  'realisateur'];

    
    public function categories()
    {
      // return $this->belongsTo(Categories::class, 'id_categorie');
       return $this->belongsToMany(Categories::class, 'films_categories', 'film_id', 'categorie_id');
    }



}
