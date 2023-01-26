<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'number' => fake()->numberBetween(),
            'email' => fake()->email(),
            'text_message' => fake()->text(),
            'product_id' => random_int(1001, 1005),
        ];
    }
}
