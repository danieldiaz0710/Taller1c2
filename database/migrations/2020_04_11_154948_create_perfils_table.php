<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilsTable extends Migration
{
   
    public function up()
    {
        Schema::create('perfils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('jugador_id')->unsigned();
            
            $table->String('Disciplina');
            $table->String('Referencia');

            $table->foreign('jugador_id')->references('id')->on('jugadors');

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
        Schema::dropIfExists('perfils');
    }
}
