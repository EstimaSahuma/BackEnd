<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePontuacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pontuacaos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aluno_id');
            $table->double('codigo');
            $table->double('mecanica');
            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
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
        Schema::dropIfExists('pontuacaos');
    }
}
