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
        for($i=1; $i<1;$i++){              //NUMERO DE turmas GERADO
            \DB::table('turmas')->insert([
                
                'id_curso'  => rand(1,12),     //NUMERO DE cursos GERADO  
      
            ]);

        }
        for($i=1; $i<11;$i++){
            \DB::table('professors')->where('id',$i)->update([
                
                'id_disciplina'  => $i,       
             
      
            ]);

        }


        for($i=1; $i<0;$i++){

            \DB::table('professor_turmas')->where('id',$i)->insert([
                
                'id_professor'  => rand(1,10),   
                'id_turma' =>rand(1,1),            //Numero de TURMAS
                'id_curso' =>rand(1,12)         
            ]);

        }


        
        
    }
}
