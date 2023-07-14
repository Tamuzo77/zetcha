<?php

namespace App\Models;

use App\Models\InfosProfessionelle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fonction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function infosProfessionnelle()
    {
        return $this->belongsTo(InfosProfessionelle::class);
    }
}
