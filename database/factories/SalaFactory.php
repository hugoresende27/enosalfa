<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sala>
 */
class SalaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->word(),
            'lugares'  => rand(12,50),
            'aquecimento'  => rand(0,1),
            'janelas'  => rand(0,1),
            'internet'  => rand(0,1),
        ];
    }
}
