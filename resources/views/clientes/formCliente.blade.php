@extends('layouts.mi-tema')

@section('contenido')
<form action="{{route('alumno.store')}}", method="POST">
  {{csrf_field()}}
  
  <label for="Nombre">Nombre: </label>
  <input type="text" name="nombre">
  <br>
  <label for="codigo">Codigo: </label>
  <input type="text" name="codigo">
  <br>
  <label for="materia">Materia: </label>
  <input type="text" name="materia">
  <br>  
  <input type="submit" name="Guardar">
</form>

@endsection