<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class DataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'value'=>$this->faker->randomFloat(),
        ];
    }
} 
