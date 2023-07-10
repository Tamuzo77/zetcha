<?php

namespace Database\Seeders;

use App\Models\PlanTarifaire;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlanTarifaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plan1 = PlanTarifaire::create([
            'name' => 'Plan 1',
            'price' => 1500,
            'is_active' => true,
        ]);

        $plan2 = PlanTarifaire::create([
            'name' => 'Plan 2',
            'price' => 2000,
            'is_active' => true,
        ]);

        $plan3 = PlanTarifaire::create([
            'name' => 'Plan 3',
            'price' => 2500,
            'is_active' => true,
        ]);
    }
}
