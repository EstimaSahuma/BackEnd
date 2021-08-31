<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpcaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcaos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pergunta_id');
            $table->string('resposta');
            $table->string('avatar');
            $table->integer('status');
            $table->foreign('pergunta_id')->references('id')->on('perguntas')->onDelete('cascade');
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
        Schema::dropIfExists('opcaos');
    }
}
