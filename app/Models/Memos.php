<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memos extends Model
{
    use HasFactory;
    protected $fillable = ['contenu','id_film','user_id' ];

    public function film()
    {
        return $this->belongsTo(Films::class, 'id_film' );
    }
}
