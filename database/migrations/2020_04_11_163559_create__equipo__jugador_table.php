<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipoJugadorTable extends Migration
{
   
    public function up()
    {
        Schema::create('_equipo__jugador', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('jugador_id')->unsigned();
            $table->bigInteger('equipo_id')->unsigned();

            $table->foreign('jugador_id')->references('id')->on('jugadors');
            $table->foreign('equipo_id')->references('id')->on('equipos');

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
        Schema::dropIfExists('_equipo__jugador');
    }
}
