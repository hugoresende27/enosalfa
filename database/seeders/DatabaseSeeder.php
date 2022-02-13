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
            AlunoSeeder::class,       
            
            ProfessorSeeder::class,
            DisciplinaSeeder::class, 
            // \App\Models\Professor::factory(10)->create(),
            // CursoSeeder::class
            
        ]);

        \App\Models\Aluno::factory(12)->create();
        // \App\Models\Professor::factory(10)->create();
        
        // \App\Models\Curso::factory(10)->create();

        
    }
}
