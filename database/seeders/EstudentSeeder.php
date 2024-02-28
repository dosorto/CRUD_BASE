<?php

namespace Database\Seeders;

use App\Models\Estudent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Estudent::factory()->count(50000)->create();
    }

    
}
