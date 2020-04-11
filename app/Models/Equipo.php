<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';
     
    protected $fillable = [
        'NameE', 'Reseña','NmTitulos'    
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function jugador()
    {
        return $this->belongsToMany('App\Models\Jugador');
    }
}
