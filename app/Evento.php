<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
  
    protected $fillable = ['titulo', 'descripcion', 'costo', 'categoria', 'hora', 'ubicacion', 'fecha', 'foto', 'link'];
}
