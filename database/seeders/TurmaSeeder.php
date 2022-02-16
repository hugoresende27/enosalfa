<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TurmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<11;$i++){
            \DB::table('turmas')->insert([
                
                'id_curso'  => $i,       
                  
                  
      
            ]);

        }
        for($i=1; $i<11;$i++){
            \DB::table('professors')->where('id',$i)->update([
                
                'id_disciplina'  => $i,       
             
      
            ]);

        }


        for($i=1; $i<31;$i++){

            \DB::table('professor_turmas')->where('id',$i)->insert([
                
                'id_professor'  => rand(1,10),   
                'id_turma' =>rand(1,10),
                'id_curso' =>rand(1,12)
            ]);

        }


        
        
    }
}
