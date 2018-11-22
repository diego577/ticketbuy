@extends('layouts.mi-tema')

@section('contenido')
<div
<div class="little">

@if()

@if(isset($materia))
<form action="{{route('materia.update',$materia->id)}}", method="POST">
  <input type="hidden" name="_method" value="PATCH">
  @else
  <form action="{{route('materia.store')}}", method="POST">
    @endif
  {{csrf_field()}}
    <div class="form-gorud">
      <label for="materia">Materia</label>
      <input name="materia" value="{{isset($materia)?$materia->materia: ''}}" class
             <small class="form"
    </div>
  
  <label for="materia">Materia: </label>
  <input type="text" name="nombre_materia">
  <br>
  <label for="crn">CRN: </label>
  <input type="text" name="crn">
  <br>
  <label for="seccion">Seccion: </label>
  <input type="text" name="seccion">
  <br> 
  <label for="horario">Horario: </label>
  <input type="time" name="horario">
  <br>
  <input type="submit" name="Guardar">
</form>

@endsection