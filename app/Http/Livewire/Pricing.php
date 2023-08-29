<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PlanTarifaire;

class Pricing extends Component
{
    public $pricings ;

    public function mount()
    {
        $this->pricings = PlanTarifaire::where('is_active', true)->get();
    }
    public function render()
    {
        return view('livewire.pricing');
    }
}
