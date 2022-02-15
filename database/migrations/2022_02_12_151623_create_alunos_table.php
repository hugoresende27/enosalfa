<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            // $table->increments('id');
            $table->string('nome');

            $table->date('idade');
            $table->string('morada');
            $table->string('email');
            $table->string('telefone');


            // $table->string('turma');
            $table->string('sala');
            $table->unsignedBigInteger('id_curso');
            $table->unsignedBigInteger('id_turma');
            // $table->foreign('id_curso')->references('id')->on('cursos')->onDelete('cascade');
            $table->timestamps();
        });

        // Schema::table('cursos', function($table)
        // {
        //     $table->foreign('id_aluno')->references('id')->on('alunos');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
};
