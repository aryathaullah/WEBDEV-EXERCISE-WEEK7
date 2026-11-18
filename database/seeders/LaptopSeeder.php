<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Laptop;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Laptop::create([
            'brand' => 'Lenovo',
            'model' => 'Ideapad Slim 3 Gen 10',
            'processor' => 'i5-13420H',
            'ram' => '16GB DDR5',
        ]);
    }
}
