@extends('layouts.mi-tema')

@section('contenido')
<form action="{{route('cliente.store')}}", method="POST">
  {{csrf_field()}}
  
  <label for="nombre">Nombre: </label>
  <input type="text" name="nombre">
  <br>
  <label for="correo">Correo: </label>
  <input type="text" name="correo">
  <br>
  <label for="pais">Pais: </label>
  <input type="text" name="pais">
  <br>  
  <input type="submit" name="Guardar">
</form>

@endsection