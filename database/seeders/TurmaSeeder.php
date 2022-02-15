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
        for($i=0; $i<25;$i++){
            \DB::table('turmas')->insert([
                
                'id_curso'  => rand(1,12),       
                'id_professor'  => rand(1,10),   
                  
      
            ]);

        }
        for($i=1; $i<11;$i++){
            \DB::table('professors')->where('id',$i)->update([
                
                'id_disciplina'  => $i,       
                'id_turma' =>$i
      
            ]);

        }
        
        
    }
}
