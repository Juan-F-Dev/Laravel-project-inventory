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
            'code' => 'PRD_' . $this->faker->numerify('#######'),
            'name' => $this->faker->words(2, true),
            'ammount' => $this->faker->randomNumber(1),
            'unit' => $this->faker->randomElement(['und', 'lbs', 'kg']),
            'price' => $this->faker->randomFloat(2, 0, 1000000),
        ];
    }
}
