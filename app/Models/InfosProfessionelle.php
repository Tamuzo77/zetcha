<?php

namespace App\Models;

use App\Models\Carte;
use App\Models\Fonction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InfosProfessionelle extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function carte()
    {
        return $this->belongsTo(Carte::class);
    }

    public function fonctions()
    {
        return $this->hasMany(Fonction::class);
    }
}
