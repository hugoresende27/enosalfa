<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         
        $this->call([
            UserSeeder::class,
            CursoSeeder::class,
            
            // // AlunoSeeder::class,       
            
            // ProfessorSeeder::class,
            
            // DisciplinaSeeder::class, 
            // TurmaSeeder::class,
            // \App\Models\Professor::factory(10)->create(),
            // CursoSeeder::class
            
        ]);

        
        /*
            SEED DE ALUNOS E NOTAS TEM DE SER PROPORCIONAL, NÃO HÁ NOTAS SEM ALUNOS.
            NÃO ESQUECER MUDAR OS ID'S A QUE SÃO ATRIBUIDAS AS NOTAS NO  --------- NotaFactory.php ---------
            PARA O NÚMERO TOTAL DE ALUNOS, CADA NOTA VAI SER ATRIBUIDA A UM ALUNO ID RANDOM!!!

            PARA GERAR MAIS TURMAS ------ TurmaSeeder.php --------- ALTERAR NÚMERO DE TURMAS GERADAS E RELAÇÕES COM CURSOS 
        
        */
        
        
        
        for($i=0;$i<5;$i++){
          
             \App\Models\Curso::factory()->create();
        }

        for($i=0;$i<10;$i++){
          
             \App\Models\Turma::factory()->create();
        }
        for($i=0;$i<20;$i++){
          
             \App\Models\Disciplina::factory()->create();
        }

        for($i=0;$i<20;$i++){
            \App\Models\Professor::factory()->create();
           
       }
        for($i=0;$i<150;$i++){
            \App\Models\Aluno::factory()->create();
           
       }

        for($i=0;$i<300;$i++){
          
            \App\Models\Nota::factory()->create();
       }
        for($i=0;$i<50;$i++){
          
            \App\Models\professor_turma::factory()->create();
       }
        for($i=0;$i<50;$i++){
          
            \App\Models\Curso_disciplinas::factory()->create();
       }

     

        // \App\Models\Curso::factory()->create();
        // \App\Models\Turma::factory()->create();
        

     
   
       


        
    }


}
