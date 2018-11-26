@extends('layouts.mi-tema')

@section('contenido')

<div>

<h1>
  Informacion del boleto {{$id}} {{$nombre_evento}}
</h1>
  
  <form action="{{route('boleto.destroy',$boleto->id)}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="btn btn-danger">
      Borrar evento
    </button>
    <a class="btn btn-warning" href="{{route('boleto.edit',$boleto->id)}}">Entrar</a>
  </form>
  
</div>