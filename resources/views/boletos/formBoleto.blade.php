@extends('admin.layout')

@section('content')
<div
<div class="little">

@if()

@if(isset($boleto))
<form action="{{route('boleto.update',$boleto->id)}}", method="POST">
  <input type="hidden" name="_method" value="PATCH">
  @else
  <form action="{{route('boleto.store')}}", method="POST">
    @endif
  {{csrf_field()}}
    <div class="form-gorud">
      <label for="boleto">Nombre del evento</label>
      <input name="boleto" value="{{isset($boleto)?$boleto->boleto: ''}}" class
             <small class="form"
    </div>
  
  <label for="nombre_evento">Nombre del evento: </label>
  <input type="text" name="nombre_evento">
  <br>
  <label for="tipo_evento">Tipo de evento: </label>
  <input type="text" name="tipo_evento">
  <br>
  <label for="ciudad">Ciudad: </label>
  <input type="text" name="ciudad">
  <br> 
  <label for="lugar">Lugar del evento: </label>
  <input type="text" name="lugar">
  <br>
  <label for="fecha">Fecha del evento: </label>
  <input type="time" name="fecha">
  <br>
  <label for="precio">Costo del boleto: </label>
  <input type="money" name="precio">
  <br>
  <input type="submit" name="Guardar">
</form>

@endsection