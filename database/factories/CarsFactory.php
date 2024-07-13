<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cars>
 */
class CarsFactory extends Factory
{
   
    public function definition(): array
    {
        return [
            'model'=>fake()->word(),
            'title'=> fake()->randomElement(['Toyota','Honda','BMW','Chevrolet']),
            'price'=>fake()->numberBetween(10000,50000),
            'description'=>fake()->text(100),
        ];
    }
}
