@extends('layouts.mi-tema')

@section('contenido')

<h1>
  Aqui estaran la lista de los alumnos
</h1>

<a href="{{action('AlumnoController@create')}}">nuevo alumno</a>
<a href="{{route('alumno.create')}}" class="btn btn-succes">nueva alumno (route)</a>


@if($alumnos->count()==0)
<div class='alert alert-warning'>
  no tienes alumnos registrados
</div>
@else

<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Codigo</th>
      <th>Carrera</th>
      <th>ultima actualizacion</th>
    </tr>
  </thead>
  <body>
    @foreach($alumnos as $alumno)
    <tr>
      <td><a class="btn btn-sm btn-info" href="{{route('alumno.show',$alumno->id)}}"</a><</td>
      <td>{{$alumno->nombre}}</td>
      <td>{{$alumno->codigo}}</td>
      <td>{{$alumno->carrera}}</td>
      <td>{{$alumno->updated_at}}</td>
    </tr>
    @endforeach
  </body>
</table>
@endif

@endsection