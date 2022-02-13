<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aluno>
 */
class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'turma'  => \Str::random(1),
            'sala'  => rand(25, 65),
            'id_curso'  => rand(1, 6),
            'created_at'=>now()
            
        ];
    }
}
