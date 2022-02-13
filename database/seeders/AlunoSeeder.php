<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aluno;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // foreach (range(1,10) as $index) {

        //     \DB::table('alunos')->insert([
        //         'nome'  => \Str::random(10),
        //         'turma'  => \Str::random(1),
        //         'sala'  => rand(25, 65),
        //         'id_curso'  => rand(1, 6),
        //         'created_at'=>now()
      
        //     ]);
        // }

        // Aluno::factory()->count(1)->create();
    }
}
