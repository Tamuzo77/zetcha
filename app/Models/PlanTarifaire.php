<?php

namespace App\Models;

use App\Models\Fonctionnalite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlanTarifaire extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function fonctionnalites()
    {
        return $this->belongsToMany(Fonctionnalite::class);
    }
}
