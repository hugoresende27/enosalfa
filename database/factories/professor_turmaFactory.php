<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\professor_turma>
 */
class professor_turmaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_professor'=>rand(1,75),
            'id_turma'=>rand(1,90),
            'id_curso'=>rand(1,30)
        ];
    }
}
