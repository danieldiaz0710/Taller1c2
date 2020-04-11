<?php

use App\Models\Estado;
use App\Models\Jugador;
use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{

    public function run()
    {
        $estado = new Estado;
        $estado->ActivoInactivo = 'Activo';

        $estado->save();

        $jugador = new Jugador;
       
      $jugador->id = '101006469';
      $jugador->Nombre = 'JADEL';
      $jugador->Apellido = 'ziaz';
      $jugador->Posicion = 'DeLanterp';
      $jugador->Edad = '20';

      $jugador2 = new Jugador;
       
      $jugador2->id = '101716596';
      $jugador2->Nombre = 'James';
      $jugador2->Apellido = 'Roaz';
      $jugador2->Posicion = 'Centro';
      $jugador2->Edad = '24';

      $estado->jugador()->saveMany([$jugador, $jugador2]);




    }
}
