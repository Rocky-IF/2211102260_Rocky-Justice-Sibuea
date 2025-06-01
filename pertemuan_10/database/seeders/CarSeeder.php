<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Merk;
use App\Models\Car;

class CarSeeder extends Seeder
{
    public function run()
    {
        $merk = Merk::create(['name' => 'Toyota']);

        Car::create([
            'merk_id' => $merk->id,
            'model' => 'Avanza',
            'color' => 'Silver',
            'year' => 2020,
            'price' => 180000,
            'image' => 'car_images/avanza.jpg',
   ]);
}
}