@extends('layout.dashboard')

@section('title', 'Hoteles')

@section('content')

<div class="row">
    <div class="col"><h1><a href="https://www.fontspace.com/category/bold">
    <img src="https://see.fontimg.com/api/renderfont4/ALEmp/eyJyIjoiZnMiLCJoIjo2NSwidyI6MTAwMCwiZnMiOjY1L
    CJmZ2MiOiIjMDAwMDAwIiwiYmdjIjoiI0ZGRkZGRiIsInQiOjF9/SG90ZWxlcw/mandhor.png" 
    alt="Bold fonts"></a></h1></div>
    <div class="col"></div>
    <div class="col"><a href="{{ route('hospedaje.create') }}">
    <button class="btn btn-success float-right"> <h7>Agregar</h7></button></a></div>
</div>

@forelse($hospedaje as $hospe)


<div class="card w-75">
  <div class="card-body">
    <h5 class="card-title">{{ $hospe->Nombre  }}</h5>
    <p class="card-text">Dirección: {{ $hospe->Direccion }}</p>
    <p class="card-text">Tipo: {{ $hospe->Tipo }}</p>
    <p class="card-text">Telefono: {{ $hospe->Telefono }}</p>
  
   <form action="{{ route('hospedaje.destroy', $hospe->id) }}" method="post">
    <a href="{{ route('hospedaje.edit', $hospe->id) }}" class="card-link">Editar</a> 
      <a href="{{ route('hospedaje.show', $hospe->id) }}" class="card-link">Ver</a>
    @csrf
      @method('DELETE')
       <button type="submit" class="btn btn-danger float-right">Eliminar</button>
</div>
</div>


@empty
 <div> <h3> No hay registros de Hoteles en la base de datos  </h3> </div>
 @endforelse

{{ $hospedaje->links() }}

@endsection