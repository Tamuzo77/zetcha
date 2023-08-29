<?php

namespace App\Http\Livewire;

use App\Models\Faq;
use Livewire\Component;

class FaqList extends Component
{
    public $faqs;

    public function mount()
    {
        $this->faqs = Faq::all();
    }
    public function render()
    {
        return view('livewire.faq-list');
    }
}
