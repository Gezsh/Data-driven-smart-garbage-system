<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reg'=>$this->faker->sentence(),
            'firstName'=>$this->faker->name(),
            'lastName'=>$this->faker->name(),
            'email'=>$this->faker->email(),
            'phoneNumber'=>$this->faker->phoneNumber(),
            
        ];
    }
}
