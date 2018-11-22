<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
     public function boletos()
  {
    return $this->belongToMany(Boleto::class)->whitPivot('ciclo_escolar','asistencias');
  }
     protected $fillable=['nombre','codigo','carrera'];
}
