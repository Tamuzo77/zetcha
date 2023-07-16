<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CarteControllerTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_the_request_to_update_carte_works(): void
    {
        $response = $this->post('/updateCarte', [
            'numeroZ' => 2854497,
        ]);

        $response->assertStatus(200);
    }
}
