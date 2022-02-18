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
        Schema::create('professor_turmas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('professor_id')->nullable();
            $table->unsignedBigInteger('turma_id')->nullable();
           

            $table->foreign('professor_id')->references('id')->on('professors')->onDelete('cascade');
            $table->foreign('turma_id')->references('id')->on('turmas')->onDelete('cascade');
            

            $table->timestamps();
        });

        Schema::table('alunos', function (Blueprint $table) {
           
            
            $table->foreign('id_turma')->references('id')->on('turmas')->onDelete('set null');          
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professor_turmas');
    }
};
