<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cursos')->insert([
            'nome'  => 'Desenvolvedor WEB Inicial',
           
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Desenvolvedor WEB Medio',
           
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Desenvolvedor WEB Avançado',
           
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Gestor Redes Sociais',
           
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Mecanica Auto',
           
        ]);

        \DB::table('cursos')->insert([
            'nome'  => 'Artes Urbanas',
           
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Soldador',
           
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'CAP de formadores',
           
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Gestao de Stocks',
           
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Estudos Interpessoais',
           
        ]);
        \DB::table('cursos')->insert([
            'nome'  => 'Eletronica Emocional',
           
        ]);
        
        \DB::table('cursos')->insert([
            'nome'  => 'Analista de Base de Dados',
           
        ]);
    }
}
