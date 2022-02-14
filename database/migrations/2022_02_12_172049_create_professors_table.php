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
        Schema::create('professors', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->unsignedBigInteger('id_disciplina');
            // $table->foreign('id_disciplina')->references('id')->on('disciplinas')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::table('disciplinas', function($table)
        {
            // $table->foreign('id_professor')->references('id')->on('professors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professors');
    }
};
