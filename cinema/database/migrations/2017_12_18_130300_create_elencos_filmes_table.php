<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElencosFilmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elencos_filmes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_filme')->unsigned();
            $table->foreign('id_filme')->references('id')->on('filmes')->onDelete('cascade');
            $table->integer('id_elenco')->unsigned();
            $table->foreign('id_elenco')->references('id')->on('elencos')->onDelete('cascade');
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
        Schema::dropIfExists('elencos_filmes');
        Schema::dropForeign('elencos_filmes_id_filme_foreign');        
        Schema::dropForeign('elencos_filmes_id_elenco_foreign');
    }
}
