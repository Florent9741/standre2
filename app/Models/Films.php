<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = ['titre', 'resume', 'duree', 'date', 'image', 'id_categorie', 'realisateur'];


    public function categories()
    {
        return $this->belongsTo(Categories::class, 'id_categorie');
    }
}
