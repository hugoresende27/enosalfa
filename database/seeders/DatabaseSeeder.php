<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            // \App\Models\Professor::factory(10)->create(),
            // CursoSeeder::class
            
        ]);

        for($i=0;$i<50;$i++){
            \App\Models\Aluno::factory()->create();
            \App\Models\Nota::factory()->create();
        }
       
        


        // for ( $i=1; $i<13 ;$i++)
        // {
        //     \DB::table('cursos')->where('id',$i)->update(['id_aluno'=> $i]);
        // }
       
     


        // \App\Models\Professor::factory(10)->create();
        // \App\Models\Disciplina::factory(10)->create();
        
        
        
        // \App\Models\Curso::factory(10)->create();

        
    }
}
