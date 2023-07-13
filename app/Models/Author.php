<?php

namespace App\Models;

use App\Models\Avis;
use App\Models\Carte;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function avis()
    {
        return $this->hasMany(Avis::class);
    }

    public function cartes()
    {
        return $this->hasMany(Carte::class);
    }
}
