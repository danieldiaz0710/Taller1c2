<?php
use App\Models\Equipo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run()
    {
         //$this->call(JugadorsTableSeeder::class);

         //$this->call(EstadosTableSeeder::class);
         //$this->call(ContratosTableSeeder::class);
         //$this->call(EquiposTableSeeder::class);
         $this->call(EquipoJugadorTableSeeder::class);
    }
}
