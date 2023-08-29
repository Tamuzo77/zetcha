<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Avis extends Component
{
    public $avis;

    public function mount()
    {
        $this->avis = \App\Models\Avis::latest()->get();
    }
    public function render()
    {
        return view('livewire.avis');
    }
}
