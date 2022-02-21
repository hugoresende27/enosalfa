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
            'telefone' => $this->faker->numerify('91#######'),
            'id_turma'  => rand(1,10) ,
            'sala_id'  => rand(1, 3),
            'id_curso'  => rand(1, 5),
            // 'id_turma'  => rand(1, 90),
            'created_at'=>now()
            
        ];
    }
}
