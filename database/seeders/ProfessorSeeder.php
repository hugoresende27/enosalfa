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
            'email' => 'fake@mail.com',
            'idade' => '1985-02-15',
            'morada'=>'rua da Flores, n.13',
            'telefone' => 99999999

              
  
        ]);


        \DB::table('professors')->insert([
            'nome'  => 'Rui',
                  
            'email' => 'fake@mail.com',
            'idade' => '1987-1-17',
            'morada'=>'rua das Couves, n.13',
            'telefone' => 99999999

        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Pedro',
              'email' => 'fake@mail.com',
              'idade' => '1977-12-17',
              'morada'=>'rua da Praia, n.13',
              'telefone' => 99999999

  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Carlos',
              'email' => 'fake@mail.com',
              'idade' => '1990-2-17',
              'morada'=>'rua do Mar, n.13',
              'telefone' => 99999999

  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Manuel',
              'email' => 'fake@mail.com',
              'idade' => '1989-6-17',
              'morada'=>'rua da Areia, n.13',
              'telefone' => 99999999

  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Tiago',
              'email' => 'fake@mail.com',
              'idade' => '1960-4-17',
              'morada'=>'rua da Moita, n.13',
              'telefone' => 99999999

  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Rita',
              'email' => 'fake@mail.com',
              'idade' => '1925-10-17',
              'morada'=>'rua da Onde, n.13',
              'telefone' => 99999999

  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Lécio',
              'email' => 'fake@mail.com',
              'idade' => '1930-8-17',
              'morada'=>'rua da Flores, n.13',
              'telefone' => 99999999

  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Ricardo',
              'email' => 'fake@mail.com',
              'idade' => '1945-12-11',
              'morada'=>'rua da Flores, n.13',
              'telefone' => 99999999

  
        ]);
        \DB::table('professors')->insert([
            'nome'  => 'Daniel',
               'email' => 'fake@mail.com',
               'idade' => '1977-10-9',
               'morada'=>'rua da Flores, n.13',
               'telefone' => 99999999

  
        ]);

        //Professor::factory()->count(10)->create();
    }
}
