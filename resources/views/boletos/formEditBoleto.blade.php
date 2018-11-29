@extends('admin.layout')

@section('content')
<form action="/boleto/update/{{$id}}", method="POST">
  <label for="boleto">Nombre del evento</label>
  <input type="text" name="boleto" value="{{$id}}">
  <input type="submit" name="Guardar">
</form>

@endsection