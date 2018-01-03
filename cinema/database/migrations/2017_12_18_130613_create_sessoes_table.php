<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('horario');
            $table->integer('lugares_disponiveis');
            $table->integer('lugares_ocupados');
            $table->integer('id_filme')->unsigned();
            $table->foreign('id_filme')->references('id')->on('filmes')->onDelete('cascade');
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
        Schema::dropIfExists('sessoes');
        Schema::dropForeign('sessoes_id_filme_foreign');        
    }
}