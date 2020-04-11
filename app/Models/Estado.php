<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';
     
    protected $fillable = [
        'ActivoInactivo'    
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function jugador()
    {
        return $this->hasMany('App\Models\Jugador');
    }
}
