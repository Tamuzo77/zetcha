<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AuthorSeeder;
use Database\Seeders\StatusSeeder;
use Database\Seeders\PlanTarifaireSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
             'name' => 'Administrator ZETCHA',
             'email' => 'admin.zetcha23@gmail.com',
             'password' => '20?Zecth@?23'
         ]);

        $this->call(StatusSeeder::class);
        $this->call(PlanTarifaireSeeder::class);
        $this->call(AuthorSeeder::class); 
    }
}
