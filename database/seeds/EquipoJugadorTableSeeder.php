<?php
use App\Models\Jugador;

use Illuminate\Database\Seeder;

class EquipoJugadorTableSeeder extends Seeder
{
    
    public function run()
    {
        $jugador =Jugador::find(1);
        
        $jugador->equipos()->attach([1,3]);
    }
}


