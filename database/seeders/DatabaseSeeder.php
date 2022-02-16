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
            
            // AlunoSeeder::class,       
            
            ProfessorSeeder::class,
            
            DisciplinaSeeder::class, 
            TurmaSeeder::class,
            // \App\Models\Professor::factory(10)->create(),
            // CursoSeeder::class
            
        ]);

        
        /*
            SEED DE ALUNOS E NOTAS TEM DE SER PROPORCIONAL, NÃO HÁ NOTAS SEM ALUNOS.
            NÃO ESQUECER MUDAR OS ID'S A QUE SÃO ATRIBUIDAS AS NOTAS NO NotaFactory.php 
            PARA O NÚMERO TOTAL DE ALUNOS, CADA NOTA VAI SER ATRIBUIDA A UM ALUNO ID RANDOM!!!
        
        */
        for($i=0;$i<10;$i++){
            \App\Models\Aluno::factory()->create();
            
        }
        for($i=0;$i<50;$i++){
          
            \App\Models\Nota::factory()->create();
        }
   
       


        
    }


}
