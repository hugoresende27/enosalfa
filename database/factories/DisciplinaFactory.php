<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Disciplina>
 */
class DisciplinaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'nome' => $this->faker->randomElement(['PHP', 'JAVA','JavaScript','Python','Portugues','Matemática','Fisica','Algoritmia','Inglês Técnico','C/C++']),
            // 'id_professor'  => rand(1, 10),
            // 'created_at'=>now()
        ];
    }
}
