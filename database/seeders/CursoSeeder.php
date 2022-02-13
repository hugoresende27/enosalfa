<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cursos')->insert([
            'nome'  => 'PHP',
            'disciplinas'  => \Str::random(10),
            // 'id_aluno'=>1,          
            
  
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'JAVA',
            'disciplinas'  => \Str::random(10),
            // 'id_aluno'=>1,          
            
  
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'C/C++',
            'disciplinas'  => \Str::random(10),
            // 'id_aluno'=>1,          
            
  
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Javascript',
            'disciplinas'  => \Str::random(10),
            // 'id_aluno'=>1,          
            
  
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'HTML/CSS',
            'disciplinas'  => \Str::random(10),
            // 'id_aluno'=>1,          
            
  
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Python',
            'disciplinas'  => \Str::random(10),
            // 'id_aluno'=>1,          
            
  
        ]);
    }
}
