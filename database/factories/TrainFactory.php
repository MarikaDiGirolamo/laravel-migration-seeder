<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company' => fake()->company(),
            'departure_station' => fake()->streetName(),
            'arrival_station' => fake()->streetName(),
            'departure_time' => fake()->time(),
            'arrival_time' => fake()->time(),
            'train_code' => fake()->randomDigit(),
            'train_carriages' => fake()->randomDigit(),
            'on_time' => fake()->boolean(),
            'deleted' => fake()->boolean(),
        ];
    }
}
