@extends('layouts.mi-tema')

@section('contenido')

<h1>
  Aqui estara el listado de materias
</h1>

<a href="{{action('MateriaController@create')}}">nueva materia (action)</a>
<a href="{{route('materia.create')}}" class="btn btn-succes">nueva materia (route)</a>

@if($materias->count()==0)
<div class='alert alert-warning'>
  no tienes materias registradas
</div>
@else

<table>
  <thead>
    <tr>
      <th>Materia</th>
      <th>crn</th>
      <th>seccion</th>
      <th>horario</th>
      <th>ultima actualizacion</th>
      <th>Usuario</th>
    </tr>
  </thead>
  <body>
    @foreach($materias as $materia)
    <tr>
      <td><a class="btn btn-sm btn-info" href="{{route('materia.show',$materia->id)}}"</a><</td>
      <td>{{$materia->nombre_materia}}</td>
      <td>{{$materia->crn}}</td>
      <td>{{$materia->seccion}}</td>
      <td>{{$materia->horario}}</td>
      <td>{{$materia->updated_at}}</td>
      <td>{{$materia->user}}</td>
    </tr>
    @endforeach
  </body>
</table>
@endif

@endsection