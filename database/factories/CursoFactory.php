<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'nome' => $this->faker->word(),
            'nome' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            
            
            // 'id_aluno'=>rand(1,50),          
            
            
        ];
    }
}
