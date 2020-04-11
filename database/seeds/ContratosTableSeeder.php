<?php

use App\Models\Jugador;

use Illuminate\Database\Seeder;

class ContratosTableSeeder extends Seeder
{
     
    public function run()
    {
        $jugador = Jugador::find(3);

        $jugador->contratos()->createMany(

            [
            ['TiempoC' => 'Contrato1','Polisas' => 'Polisas1'],
            ['TiempoC' => 'Contrato2','Polisas' => 'Polisas2'],                         
            ]

        );


    }
}
