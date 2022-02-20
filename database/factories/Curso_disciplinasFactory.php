<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso_disciplinas>
 */
class Curso_disciplinasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'id_curso'=>rand(1,5),
            'id_disciplina'=>rand(1,20),
        ];
    }
}
