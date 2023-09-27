<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer'=>fake()->name() ,
            'review'=>fake()->paragraph(),
            'star'=>fake()->numberBetween(1,5),
            'product_id'=>function(){
                return Product::all()->random() ;
            }
        ];
    }
}
