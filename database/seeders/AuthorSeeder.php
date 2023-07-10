<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $author1 = Author::create([
            'name' => 'Jellal Tamuzo',
            'email' => 'jellalsayaman@gmail.com',
            'phone_number' => '+22952722802'
        ]);

        $author2 = Author::create([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'phone_number' => '61000000'
        ]);
    }
}
