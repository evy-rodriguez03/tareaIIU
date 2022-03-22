<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BellezaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pSombras' => $this->faker->name(),
            'blush' => $this->faker->name(),
            'delineador' => $this->faker->name(),
            'base' => $this->faker->name(),
            'polvo' => $this->faker->name(),
            'listics' => $this->faker->name(),
        ];
    }
}
