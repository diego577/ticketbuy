@extends('layouts.mi-tema')

@section('contenido')

<h1>
  Lista de boletos
</h1>

<a href="{{action('BoletoController@create')}}">Agregar evento (action)</a>
<a href="{{route('boleto.create')}}" class="btn btn-succes">Agregar evento (route)</a>

@if($boletos->count()==0)
<div class='alert alert-warning'>
  No hay eventos registrados
</div>
@else

<table>
  <thead>
    <tr>
      <th>Nombre del evento</th>
      <th>Tipo del evento</th>
      <th>Ciudad</th>
      <th>Lugar del evento</th>
      <th>fecha</th>
      <th>Costo</th>
    </tr>
  </thead>
  <body>
    @foreach($boletos as $boleto)
    <tr>
      <td><a class="btn btn-sm btn-info" href="{{route('boleto.show',$boleto->id)}}"</a><</td>
      <td>{{$boleto->nombre_evento}}</td>
      <td>{{$boleto->tipo_evento}}</td>
      <td>{{$boleto->ciudad}}</td>
      <td>{{$boleto->lugar}}</td>
      <td>{{$boleto->fecha}}</td>
      <td>{{$boleto->precio}}</td>
      <td>{{$boleto->updated_at}}</td>
    </tr>
    @endforeach
  </body>
</table>
@endif

@endsection