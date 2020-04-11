<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model
{
    protected $table = 'entrenadors';
     
    protected $fillable = [
        'perfil_id', 'NombreE', 'ApellidoE','EdadE','Experiencia'    
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function perfil()
    {
        return $this->belongsTo('App\Models\Perfil');
    }
}
