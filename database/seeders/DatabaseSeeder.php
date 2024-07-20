<?php

namespace Database\Seeders;

use App\Models\Cars;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {
        $this->call([
            CarsSeeder::class,
            UsersSeeder::class,
        ]);
    }
}
