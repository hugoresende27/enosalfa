<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aluno;

use Faker\Factory as Faker;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();
        

        // foreach (range(1,50) as $index) {

        //     \DB::table('alunos')->insert([
        //         'nome' => $this->faker->firstName(),
        //         'idade' => $this->faker->dateTimeBetween($startDate = '-50 years', $endDate = '-18 years', $timezone = null),
        //         'morada' => $this->faker->streetAddress(),
        //         'email' => $this->faker->email(),
        //         'telefone' => $this->faker->numerify('91-#######'),
        //         'id_turma'  => rand(1,25) ,
        //         'sala'  => rand(1, 20),
        //         'id_curso'  => rand(1, 10),
        //         'created_at'=>now()
      
        //     ]);
       // }

        // Aluno::factory()->count(1)->create();
    }
}
