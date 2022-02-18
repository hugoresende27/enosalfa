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
        Schema::create('cursos_turmas', function (Blueprint $table) {
            

            $table->unsignedBigInteger('id_curso')->nullable();
            $table->unsignedBigInteger('id_turma')->nullable();
           

            $table->foreign('id_curso')->references('id')->on('cursos')->onDelete('cascade');
            $table->foreign('id_turma')->references('id')->on('turmas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos_turmas');
    }
};
