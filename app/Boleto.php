<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boleto extends Model
{
    protected $fillable=['nombre_evento','precio'];//campos de tabla
  
  public function clientes()
  {
    //acceder a nuevos campos de la tabla pivote (->whitPivot)
    return $this->belongsToMany(Cliente::class)->whitPivot('id','nombre');
    //php artisan migration:fresh... sirve para actualizar los nuevos campos de las tablas de migracion
  }
}
