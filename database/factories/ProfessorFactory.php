<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Professor>
 */
class ProfessorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => "Prof.".$this->faker->name(),
            'id_disciplina'  => rand(1, 10),
            'id_turma'  => rand(1, 25),
            'created_at'=>now()
            
        ];
    }
}
