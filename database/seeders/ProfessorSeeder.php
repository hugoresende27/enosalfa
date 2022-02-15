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
            // 'id_turma'  => 1,       
  
        ]);


        \DB::table('professors')->insert([
            'nome'  => 'Rui',
            //  'id_turma'  => 2,       
  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Pedro',
            // 'id_turma'  => 3,       
  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Carlos',
            // 'id_turma'  => 4,       
  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Manuel',
            // 'id_turma'  => 5,       
  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Tiago',
            // 'id_turma'  => 6,       
  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Rita',
            // 'id_turma'  => 7,       
  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Lécio',
            // 'id_turma'  => 8,       
  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Ricardo',
            // 'id_turma'  => 9,       
  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Daniel',
            // 'id_turma'  => 10,       
  
        ]);

        //Professor::factory()->count(10)->create();
    }
}
