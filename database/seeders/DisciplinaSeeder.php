<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Disciplina;

class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('disciplinas')->insert([
            'nome'  => 'PHP',
            'id_professor'  => 1,       
  
        ]);
        \DB::table('disciplinas')->insert([
            'nome'  => 'JAVA',
            'id_professor'  => 2,       
  
        ]);
        \DB::table('disciplinas')->insert([
            'nome'  => 'JavaScript',
            'id_professor'  => 3,       
  
        ]);
        \DB::table('disciplinas')->insert([
            'nome'  => 'Python',
            'id_professor'  => 4,       
  
        ]);
        \DB::table('disciplinas')->insert([
            'nome'  => 'Matemática',
            'id_professor'  => 5,       
  
        ]);
        \DB::table('disciplinas')->insert([
            'nome'  => 'Algoritmia',
            'id_professor'  => 6,       
  
        ]);
        \DB::table('disciplinas')->insert([
            'nome'  => 'Inglês Técnico',
            'id_professor'  => 7,       
  
        ]);
        \DB::table('disciplinas')->insert([
            'nome'  => 'C/C++',
            'id_professor'  => 8,       
  
        ]);
        \DB::table('disciplinas')->insert([
            'nome'  => 'Psicologia',
            'id_professor'  => 9,       
  
        ]);
        \DB::table('disciplinas')->insert([
            'nome'  => 'Bases de Dados',
            'id_professor'  => 10,       
  
        ]);

       
    }
}
