<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PlanTarifaire;
use App\Models\Fonctionnalite;

class Features extends Component
{
    public $fonctionnalites ;
    public $plans ;

    public function mount()
    {
        $this->fonctionnalites = Fonctionnalite::all();
        $this->plans = PlanTarifaire::where('is_active', true)->get();
    }

    public function render()
    {
        return view('livewire.features');
    }
}
