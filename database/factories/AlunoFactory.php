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
            'nome' => $this->faker->firstName(),
            'idade' => $this->faker->dateTimeBetween($startDate = '-50 years', $endDate = '-18 years', $timezone = null),
            'morada' => $this->faker->streetAddress(),
            'email' => $this->faker->email(),
            'telefone' => $this->faker->numerify('91-#######'),
            'turma'  => \Str::upper(\Str::random(2)) ,
            'sala'  => rand(1, 20),
            'id_curso'  => rand(1, 6),
            'created_at'=>now()
            
        ];
    }
}
