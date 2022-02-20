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
        Schema::create('salas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('lugares');

            $table->boolean('aquecimento');
            $table->boolean('janelas');
            $table->boolean('internet');
          
        });

        Schema::table('alunos', function (Blueprint $table) {
           
            
            $table->foreign('sala_id')->references('id')->on('salas')->onDelete('set null');          
            
        });

        Schema::table('turmas', function (Blueprint $table) {
           
            
            $table->foreign('sala_id')->references('id')->on('salas')->onDelete('set null');          
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salas');
    }
};
