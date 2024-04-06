<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dustbin>
 */
class DustbinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'level' => $this->faker->numberBetween(1, 100),
        ];
    }
}
