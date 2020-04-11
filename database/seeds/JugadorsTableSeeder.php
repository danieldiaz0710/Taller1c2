<?php

Use App\Models\Entrenador;
Use App\Models\Perfil;
Use App\Models\Jugador;
use Illuminate\Database\Seeder;

class JugadorsTableSeeder extends Seeder
{
    
    public function run()
    {
      $jugador = new Jugador;
       
      $jugador->id = '10100796';
      $jugador->Nombre = 'BANIEL';
      $jugador->Apellido = 'Diaz';
      $jugador->Posicion = 'Defensa';
      $jugador->Edad = '2';

      $jugador->save();

      $perfil = new Perfil;
      $perfil->Disciplina = 'Excelente';
      $perfil->Referencia = 'Bueno';

      $jugador->perfil()->save($perfil);

      $entrenador = new Entrenador;
      $entrenador->NombreE = 'ZIZU';
      $entrenador->ApellidoE = 'Zidane';
      $entrenador->EdadE = '50';
      $entrenador->Experiencia = '7 años';    

      $perfil->entrenador()->save($entrenador);




    }
}
