<?php

namespace Database\Seeders;

use App\Models\Cars;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void 
    {
    //   Cars::create([
    //   'photo'=>null,
    //   'model'=>'Test model1',
    //   'title'=>'Test title1',
    //   'price'=>'2000$',
    //   'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit',
    //   ]);     

      
    //   Cars::create([
    //     'photo'=>null,
    //     'model'=>'Test model2',
    //     'title'=>'Test title2',
    //     'price'=>'2000$',
    //     'description'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit',
    //       ]);
    Cars::factory()->count(4)->create();
    }
}
