<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CaballeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'nombre_completo' => $this->faker->firstName .' '.$this->faker->lastName ,
            'dni' => $this->faker->numerify('0703').'-'.$this->faker->numerify('199#').'-'.$this->faker->numerify('#####'),
            'correo_electronico' =>$this->faker->email, 
            'telefono' => $this->faker->numerify('########'),
            'genero' =>$this->faker->randomElement($array = array ('femenino','masculino')), 
        ];
    }
}
