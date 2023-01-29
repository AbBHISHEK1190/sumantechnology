<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\Product::factory(10)->create();

        \App\Models\Product::create([
            'name' => 'Mobile 1',
            'Price' => '100',
            'description'=>'The iPhone is a smartphone made by Apple that combines a computer, iPod, digital camera and cellular phone into one device with a touchscreen interface.'
        ]);
        \App\Models\Product::create([
            'name' => 'Mobile 1',
            'Price' => '100',
            'description'=>'The Mobile1 is a smartphone made by Apple that combines a computer, iPod, digital camera and cellular phone into one device with a touchscreen interface.'
        ]);
        \App\Models\Product::create([
            'name' => 'Mobile 2',
            'Price' => '123',
            'description'=>'The Mobile2 is a smartphone made by Apple that combines a computer, iPod, digital camera and cellular phone into one device with a touchscreen interface.'
        ]);
        \App\Models\Product::create([
            'name' => 'Mobile 3',
            'Price' => '788',
            'description'=>'The Mobile3 is a smartphone made by Apple that combines a computer, iPod, digital camera and cellular phone into one device with a touchscreen interface.'
        ]);
        \App\Models\Product::create([
            'name' => 'Mobile 4',
            'Price' => '100',
            'description'=>'The Mobile4 is a smartphone made by Apple that combines a computer, iPod, digital camera and cellular phone into one device with a touchscreen interface.'
        ]);
        \App\Models\Product::create([
            'name' => 'Mobile 5',
            'Price' => '100',
            'description'=>'The Mobile5 is a smartphone made by Apple that combines a computer, iPod, digital camera and cellular phone into one device with a touchscreen interface.'
        ]);
    }
}
