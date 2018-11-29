@extends('admin.layout')

@section('content')

<h1>
  Lista de clientes
</h1>

<a href="{{action('ClienteController@create')}}">Dar de alta cliente</a>
<a href="{{route('cliente.create')}}" class="btn btn-succes">Dar de alta cliente (route)</a>


@if($clientes->count()==0)
<div class='alert alert-warning'>
  No hay clientes registrados
</div>
@else

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Pais</th>
    </tr>
  </thead>
  <body>
    @foreach($clientes as $cliente)
    <tr>
      <td><a class="btn btn-sm btn-info" href="{{route('cliente.show',$cliente->id)}}"</a><</td>
      <td>{{$cliente->id}}</td>
      <td>{{$cliente->nombre}}</td>
      <td>{{$cliente->correo}}</td>
      <td>{{$cliente->pais}}</td>
      <td>{{$cliente->updated_at}}</td>
    </tr>
    @endforeach
  </body>
</table>
@endif

@endsection