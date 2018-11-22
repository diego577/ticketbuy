@extends('layouts.mi-tema')

@section('contenido')

<div>

<h1>
  Informacion de materia {{$id}} {{$nombre}}
</h1>
  
  <form action="{{route('materia.destroy',$materia->id)}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="btn btn-danger">
      Borrar materia
    </button>
    <a class="btn btn-warning" href="{{route('materia.edit',$materia->id)}}">Entrar</a>
  </form>
  
</div>