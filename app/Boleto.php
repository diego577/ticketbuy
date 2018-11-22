<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boleto extends Model
{
    protected $fillable=['user_id','nombre_materia','crn'];//campos de tabla
  /*
      public function user()
    {
        return $this->belongsTo('App/User');
    }
    */
  public function user()//a un usuario
  {
    //return $this->belongsTo('App\User'); 
    return $this->belongsTo(User::class);//cualquier metodo funciona
  }
  
  public function clientes()
  {
    //acceder a nuevos campos de la tabla pivote (->whitPivot)
    return $this->belongsToMany(Cliente::class)->whitPivot('ciclo_escolar','asistencias');
    //php artisan migration:fresh... sirve para actualizar los nuevos campos de las tablas de migracion
  }
}
