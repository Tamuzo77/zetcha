<?php

namespace App\Models;

use App\Models\Author;
use App\Models\Status;
use App\Models\PlanTarifaire;
use App\Models\InfosProfessionelle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carte extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function planTarifaire()
    {
        return $this->belongsTo(PlanTarifaire::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function infosProfessionnelles()
    {
        return $this->hasMany(InfosProfessionelle::class);
    }

}
