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
            'nome'  => 'Desenvolvedor WEB Inicial',
            'disciplinas'  => \Str::random(10),
            // 'id_aluno'=>1,          
            
  
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Desenvolvedor WEB Medio',
            'disciplinas'  => \Str::random(10),
            // 'id_aluno'=>1,          
            
  
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Desenvolvedor WEB Avançado',
            'disciplinas'  => \Str::random(10),
            // 'id_aluno'=>1,          
            
  
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Gestor Redes Sociais',
            'disciplinas'  => \Str::random(10),
            // 'id_aluno'=>1,          
            
  
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Mecanica Auto',
            'disciplinas'  => \Str::random(10),
            // 'id_aluno'=>1,          
            
  
        ]);

        \DB::table('cursos')->insert([
            'nome'  => 'Artes Urbanas',
            'disciplinas'  => \Str::random(10),
            // 'id_aluno'=>1,          
            
  
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Soldador',
            'disciplinas'  => \Str::random(10),
            // 'id_aluno'=>1,          
            
  
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'CAP de formadores',
            'disciplinas'  => \Str::random(10),
            // 'id_aluno'=>1,          
            
  
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Gestao de Stocks',
            'disciplinas'  => \Str::random(10),
            // 'id_aluno'=>1,          
            
  
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Estudos Interpessoais',
            'disciplinas'  => \Str::random(10),
            // 'id_aluno'=>1,          
            
  
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Eletronica Emocional',
            'disciplinas'  => \Str::random(10),
            // 'id_aluno'=>1,          
            
  
        ]);
        
        \DB::table('cursos')->insert([
            'nome'  => 'Analista de Base de Dados',
            'disciplinas'  => \Str::random(10),
            // 'id_aluno'=>1,          
            
  
        ]);
    }
}
