<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrenadorsTable extends Migration
{
    
    public function up()
    {
        Schema::create('entrenadors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('perfil_id')->unsigned();
            
            $table->String('NombreE');
            $table->String('ApellidoE');
            $table->String('EdadE');
            $table->String('Experiencia');

            $table->foreign('perfil_id')->references('id')->on('perfils');

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
        Schema::dropIfExists('entrenadors');
    }
}
