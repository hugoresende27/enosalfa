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
            'idade' => $this->faker->dateTimeBetween($startDate = '-50 years', $endDate = '-18 years', $timezone = null),
            'morada' => $this->faker->streetAddress(),
            'email' => $this->faker->email(),
            'telefone' => $this->faker->numerify('91#######'),
            'created_at'=>now()
            
        ];
    }
}
