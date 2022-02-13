<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Professor;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('professors')->insert([
            'nome'  => 'Luis',
            // 'id_disciplina'  => 1,       
  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Rui',
            // 'id_disciplina'  => 2,       
  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Pedro',
            // 'id_disciplina'  => 3,       
  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Carlos',
            // 'id_disciplina'  => 4,       
  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Manuel',
            // 'id_disciplina'  => 5,       
  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Tiago',
            // 'id_disciplina'  => 6,       
  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Rita',
            // 'id_disciplina'  => 7,       
  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Lécio',
            // 'id_disciplina'  => 8,       
  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Ricardo',
            // 'id_disciplina'  => 9,       
  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Daniel',
            // 'id_disciplina'  => 10,       
  
        ]);

        //Professor::factory()->count(10)->create();
    }
}
