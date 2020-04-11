<?php

use App\Models\Equiupo;
use Illuminate\Database\Seeder;

class EquiposTableSeeder extends Seeder
{
    
    public function run()
    {
     Equipo::create(['NameE' => 'Real Madrid', 'Reseña'=> 'Supercampeones', 'NmTitulos' => '20']);
     Equipo::create(['NameE' => 'Barcelona', 'Reseña'=> 'Los hijo d Rm', 'NmTitulos' => '10']);
     Equipo::create(['NameE' => 'atletico', 'Reseña'=> 'sergio 93 Ramos', 'NmTitulos' => '5']);
    }
}
