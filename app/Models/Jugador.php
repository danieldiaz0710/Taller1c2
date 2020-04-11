<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notificable;
class Jugador extends Model
{
    

    protected $table = 'jugadors';
     
    protected $fillable = [
        'estado_id', 'Nombre', 'Apellido','Posicion','Edad'
    ];

    
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    
    public function perfil()
    {
        return $this->hasOne('App\Models\Perfil');
    }
    
    public function estado()
    {
        return $this->belongsTo('App\Models\Estado');
    }
    
    public function contrato()
    {
        return $this->hasMany('App\Models\Contrato');
    }

    public function equipo()
    {
        return $this->belongsToMany('App\Models\Equipo');
    }

}
