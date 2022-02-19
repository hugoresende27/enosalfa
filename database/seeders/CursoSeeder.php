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
           
        ]);

        \DB::table('turmas')->insert([
            'id_curso'  => 1,
           
        ]);


        \DB::table('alunos')->insert([
            'nome' => 'José Carlos',
            'email' => 'aluno@aluno',
            'idade' => '1989-6-17',
            'morada'=>'rua da Areia, n.13',
            'telefone' => 99999999,
            'sala' => 1,
            'id_turma'=>1,
            'id_curso'=>1,
            'created_at'=>now()
            
           
        ]);

        \DB::table('disciplinas')->insert([
            'nome' => 'Laravel',     
          
        ]);
        \DB::table('disciplinas')->insert([
            'nome' => 'PHP',     
          
        ]);

        \DB::table('professors')->insert([
            'nome' => 'Prof. Alberto',
            'email' => 'prof@prof',
            'idade' => '1958-6-17',
            'morada'=>'rua da Areia, n.17',
            'telefone' => 6666666,
            'id_disciplina' => 1,
            'created_at'=>now()
            
           
        ]);

        \DB::table('professor_turmas')->insert([
            
            'turma_id'  => 1,
            'professor_id'  => 1,
           
        ]);
        \DB::table('cursos_turmas')->insert([
            
            'id_turma'  => 1,
            'id_curso'  => 1,
           
        ]);
        \DB::table('notas')->insert([
            
            'id_disciplina'  => 1,
            'id_aluno'  => 1,
            'nota' => 19
           
        ]);
        \DB::table('notas')->insert([
            
            'id_disciplina'  => 2,
            'id_aluno'  => 1,
            'nota' => 20
           
        ]);

        \DB::table('curso_disciplinas')->insert([
            
            'id_curso'  => 1,
            'id_disciplina'  => 1,
         
           
        ]);

        \DB::table('curso_disciplinas')->insert([
            
            'id_curso'  => 1,
            'id_disciplina'  => 2,
         
           
        ]);

 
        
    
      

      

        
        /*
        \DB::table('cursos')->insert([
            'nome'  => 'Desenvolvedor WEB Inicial',
           
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Desenvolvedor WEB Medio',
           
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Desenvolvedor WEB Avançado',
           
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Gestor Redes Sociais',
           
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Mecanica Auto',
           
        ]);

        \DB::table('cursos')->insert([
            'nome'  => 'Artes Urbanas',
           
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Soldador',
           
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'CAP de formadores',
           
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Gestao de Stocks',
           
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Estudos Interpessoais',
           
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Eletronica Emocional',
           
        ]);
        
        \DB::table('cursos')->insert([
            'nome'  => 'Analista de Base de Dados',
           
        ]);
        */
    }
}
