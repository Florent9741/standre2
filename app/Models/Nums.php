<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nums extends Model
{
    use HasFactory;

    protected $fillable = ['Nom', 'ninterne', 'nexterne', 'gpinterc', 'gpdiff'];
}
