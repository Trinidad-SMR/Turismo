@extends('layout.dashboard')

@section('title', 'Restaurantes')

@section('content')

<div class="row">
    <div class="col"><h1> <a href="https://www.fontspace.com/category/bold">
    <img src="https://see.fontimg.com/api/renderfont4/ALEmp/eyJyIjoiZnMiLCJoIjo2NSwidyI6MTAwMCwiZnMiOjY1LC
    JmZ2MiOiIjMDAwMDAwIiwiYmdjIjoiI0ZGRkZGRiIsInQiOjF9/UmVzdGF1cmFudGVz/mandhor.png" alt="Bold fonts"></a> 
    </h1></div>
    <div class="col"></div>
    <div class="col"><a href="{{ route('restaurante.create') }}">
    <button class="btn btn-success float-right"> <h7>Agregar</h7></button></a></div>
</div>

@forelse($restaurante as $resta)
<br>
  <div class="card-header">
  <h5 class="card-title"><center>{{ $resta->Nombre  }}</center></h5>
  </div>
  <div class="card-body">
    <p class="card-text">Dirección: {{ $resta->Direccion }}</p>
    <p class="card-text">Tipo: {{ $resta->Tipo }}</p>
    <p class="card-text">Telefono: {{ $resta->Telefono }}</p>
    
      <form action="{{ route('restaurante.destroy', $resta->id) }}" method="post">
      <a href="{{ route('restaurante.edit', $resta->id) }}" class="btn btn-primary float-right">Editar</a>
      <a href="{{ route('restaurante.show', $resta->id) }}" class="btn btn-primary float-right ">Ver</a>
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger float-right">Eliminar</button>
        </form> 
  </div>
  
  @empty
 <div> <h3> No hay registros de Restaurantes en la base de datos  </h3> </div>
@endforelse

{{ $restaurante->links() }}

@endsection