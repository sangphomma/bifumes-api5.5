<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Process\FakeProcessResult;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'name'=>fake()->word() ,
            'detail'=>fake()->paragraph() ,
            'price'=>fake()->numberBetween(20, 80),
            'stock'=>fake()->numberBetween(0,10),
            'discount'=>fake()->numberBetween(2 ,30) ,

        ];
    }
}
