<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nota>
 */
class NotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at'=>now(),
            'id_disciplina'=>rand(1,10),
            'id_aluno'=>rand(1,50),
            'nota'=>rand(4,20)
        ];
    }
}
