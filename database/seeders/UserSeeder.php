<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@admin',
            'role' => 3,
            'password' => bcrypt('admin'),
        ]);

        \DB::table('users')->insert([
            'name' => 'José Carlos',
            'email' => 'aluno@aluno',
            'role' => 1,
            'password' => bcrypt('aluno'),
        ]);

        \DB::table('users')->insert([
            'name' => 'Prof. Alberto',
            'email' => 'prof@prof',
            'role' => 2,
            'password' => bcrypt('prof'),
        ]);
    }
}
