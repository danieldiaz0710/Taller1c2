<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = 'contratos';
     
    protected $fillable = [
        'jugador_id', 'TiempoC', 'Polisas',    
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function jugador()
    {
        return $this->belongsTo('App\Models\Jugador');
    }
}
