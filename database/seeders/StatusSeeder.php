<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $enProduction = Status::create([
            'name' => 'En Production',
        ]);

        $cree = Status::create([
            'name' => 'Crée',
        ]);

        $livree = Status::create([
            'name' => 'Livrée',
        ]);
    }
}
