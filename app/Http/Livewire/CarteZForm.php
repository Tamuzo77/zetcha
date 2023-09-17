<?php

namespace App\Http\Livewire;

use App\Models\Carte;
use App\Models\Author;
use Livewire\Component;
use App\Models\PlanTarifaire;

class CarteZForm extends Component
{
    public PlanTarifaire $planTarifaire;
    public Carte $carte;
    public Author $author;
    public $firstname;
    public $increment = 1;
    public $infos = [];
    public $fonctions = [];


    protected $rules = [
        'carte.last_name' => 'required',
        'carte.first_name' => 'required',
        'carte.picture' => 'image',
        'author.name' => 'required',
        'author.email' => 'required|email',
        'author.phone_number' => 'phone:BJ'
    ];
    public function mount( $planTarifaireId)
    {
        $this->planTarifaire = PlanTarifaire::find($planTarifaireId);
        $this->carte = new Carte();
        $this->author = new Author();
        $this->fonctions = [['name' => '']];
        $this->infos = [[
        'enterprise_name'=>'', 
        'mail' => '', 
        'phone_number1'=>"", 
        'phone_number2' =>"", 
        'enterprise_adress'=>'', 
        'lien_facebook'=>'', 
        'lien_twitter'=>'', 
        'lien_linkedin'=>'', 
        ]];
    }

    public function addFonction()
    {
        $this->fonctions[] = ['name' => ''];
    }

    public function addInfos()
    {
        $this->infos[] = [
        'enterprise_name'=>'', 
        'mail' => '', 
        'phone_number1'=>"", 
        'phone_number2' =>"", 
        'enterprise_adress'=>'', 
        'lien_facebook'=>'', 
        'lien_twitter'=>'', 
        'lien_linkedin'=>'', 
        ];
    }

    public function removeFonction($index)
    {
        unset($this->fonctions[$index]);
        $this->fonctions = array_values($this->fonctions);
    }

    public function removeInfo($index)
    {
        unset($this->infos[$index]);
        $this->infos = array_values($this->infos);
    }

    public function updatedCarteLastName()
    {
        $this->validateOnly('carte.last_name');
    }

    public function updatedCarteFirstName()
    {
        $this->validateOnly('carte.first_name');
    }

    public function updatedCartePicture()
    {
        $this->validateOnly('carte.picture');
    }

    public function updatedAuthorName()
    {
        $this->validateOnly('author.name');
    }

    public function updatedAuthorEmail()
    {
        $this->validateOnly('author.email');
    }

    public function updatedAuthorPhoneNumber()
    {
        $this->validateOnly('author.phone_number');
    }

    public function render()
    {
        return view('livewire.carte-z-form');
    }
}
