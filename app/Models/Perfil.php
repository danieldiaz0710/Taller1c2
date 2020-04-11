<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfils';
     
    protected $fillable = [
        'jugador_id', 'Disciplina', 'Referencia'    
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function jugador()
    {
        return $this->belongsTo('App\Models\Jugador');
    }
    public function entrenador()
    {
        return $this->hasOne('App\Models\Entrenador');
    }

}
