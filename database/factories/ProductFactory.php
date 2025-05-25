<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;

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
            'code' => $this->faker->numerify('####'),
            'name' => $this->faker->word,
            'ammount' => $this->faker->randomNumber(2),
            'unit' => $this->faker->randomElement(['und', 'lbs', 'kg']),
            'price' => $this->faker->randomFloat(2, 0, 1000000),
        ];
    }
}
