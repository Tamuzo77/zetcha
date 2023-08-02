<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PlanTarifaire;

class Pricing extends Component
{
    public $pricings ;

    public function mount()
    {
        $this->pricings = PlanTarifaire::all();
    }
    public function render()
    {
        return view('livewire.pricing');
    }
}
