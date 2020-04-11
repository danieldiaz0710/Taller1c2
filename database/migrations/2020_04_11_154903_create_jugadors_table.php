<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugadorsTable extends Migration
{
    
    public function up()
    {
        Schema::create('jugadors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('estado_id')->unsigned()->nullable();
            $table->String('Nombre');
            $table->String('Apellido');
            $table->String('Posicion');
            $table->String('Edad');
            
            
            $table->foreign('estado_id')->references('id')->on('estados')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->rememberToken();

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
        Schema::dropIfExists('jugadors');
    }
}
