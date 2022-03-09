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
                   
  
        ]);

        \DB::table('professors')->where('id',1)->update(['id_disciplina'=> 1]);
        // \DB::table('cursos')->where('id',1)->update(['id_aluno'=> 1]);




        \DB::table('disciplinas')->insert([
            'nome'  => 'JAVA',
                   
  
        ]);

        \DB::table('professors')->where('id',2)->update(['id_disciplina'=> 2]);





        \DB::table('disciplinas')->insert([
            'nome'  => 'JavaScript',
                   
  
        ]);

        \DB::table('professors')->where('id',3)->update(['id_disciplina'=> 3]);





        
        \DB::table('disciplinas')->insert([
            'nome'  => 'Python',
                   
  
        ]);

        \DB::table('professors')->where('id',4)->update(['id_disciplina'=> 4]);





        \DB::table('disciplinas')->insert([
            'nome'  => 'Matemática',
                   
  
        ]);

        \DB::table('professors')->where('id',5)->update(['id_disciplina'=> 5]);




        \DB::table('disciplinas')->insert([
            'nome'  => 'Algoritmia',
                   
  
        ]);

        \DB::table('professors')->where('id',6)->update(['id_disciplina'=> 6]);





        \DB::table('disciplinas')->insert([
            'nome'  => 'Inglês Técnico',
                   
  
        ]);

        \DB::table('professors')->where('id',7)->update(['id_disciplina'=> 7]);





        \DB::table('disciplinas')->insert([
            'nome'  => 'C/C++',
                   
  
        ]);
        \DB::table('professors')->where('id',8)->update(['id_disciplina'=> 8]);






        \DB::table('disciplinas')->insert([
            'nome'  => 'Psicologia',
                   
  
        ]);
        \DB::table('professors')->where('id',9)->update(['id_disciplina'=> 9]);





        \DB::table('disciplinas')->insert([
            'nome'  => 'Bases de Dados',
                   
  
        ]);
        \DB::table('professors')->where('id',10)->update(['id_disciplina'=> 10]);




       
    }
}
