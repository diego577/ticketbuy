@extends('layouts.app')

@section('content')
<form action="/materia/update/{{$id}}", method="POST">
  <label for="materia">Materia</label>
  <input type="text" name="materia" value="{{$id}}">
  <input type="submit" name="Guardar">
</form>

@endsection