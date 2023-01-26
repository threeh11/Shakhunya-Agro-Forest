<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition()
    {
        return [
            'date_write' => now(),
            'rating' => random_int(0,5),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'advantages' => fake()->text(),
            'disadvantages' => fake()->text(),
            'comment' => fake()->text(),
            'name' => fake()->name(),
            'product_id' => random_int(1001, 1005),
        ];
    }
}
