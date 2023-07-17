<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Carte;
use App\Models\Author;
use App\Models\PlanTarifaire;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarteControllerTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_the_request_to_update_carte_works(): void
    {
        $plan1 = PlanTarifaire::create([
            'name' => 'Plan 1',
            'price' => 1500,
            'is_active' => true,
        ]);
        $author = new Author();
        $author->name = 'Toto';
        $author->email = 'toto@gmail.com';
        $author->phone_number = 123456789;
        $author->save();
        $carte = Carte::create([
            'numeroZ' => 1234567,
            'codeQR'  =>'http://localhost/zetcha-cards/ZTA1234567',
            'plan_tarifaire_id' =>1,
            'status_id' =>1,
            'author_id' =>$author->id,
            'last_name' =>$author->name,
            'first_name' =>'Prenom',
        ]);
        $response = $this->post('/updateCarte', [
            'numeroZ' => 1234567,
        ]);

        $response->assertStatus(200);
    }

    public function test_the_request_to_redo_carte_works()
    {
        $plan1 = PlanTarifaire::create([
            'name' => 'Plan 2',
            'price' => 1500,
            'is_active' => true,
        ]);
        $author = new Author();
        $author->name = 'tata';
        $author->email = 'tata@gmail.com';
        $author->phone_number = 123456789;
        $author->save();
        
        $carte = Carte::create([
            'numeroZ' => 1234568,
            'codeQR'  =>'http://localhost/zetcha-cards/ZTA1234568',
            'plan_tarifaire_id' =>$plan1->id,
            'status_id' =>1,
            'author_id' =>$author->id,
            'last_name' =>$author->name,
            'first_name' =>'Prenom',
        ]);


        $response = $this->post('/lostCarte', [
            'numeroZ' => 1234568,
            'explaination' => "Désolé mon chien l'a mangé",
        ]);

        $response->assertStatus(200);
    }
}
