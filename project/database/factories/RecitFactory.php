<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recit>
 */
class RecitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => fake()->name(),
            'description' => fake()->paragraph(),
            'conseil' => fake()->paragraph(),
            'destination_id'=> 1,
        ];
    }

}
