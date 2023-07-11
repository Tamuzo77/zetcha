<?php

namespace App\Models;

use App\Models\PlanTarifaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fonctionnalite extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function planTarifaire()
    {
        return $this->belongsTo(PlanTarifaire::class);
    }

}
