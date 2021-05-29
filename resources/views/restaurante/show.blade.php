@extends('layout.layout')

@section('title', 'Ver Restaurantes')

@section('content')

<div class="card-header">
  <h5 class="card-title"><center>{{ $restaurante->Nombre  }}</center></h5>
  </div>
  <div class="card-body">
    <p class="card-text">Dirección: {{ $restaurante->Direccion }}</p>
    <p class="card-text">Tipo: {{ $restaurante->Tipo }}</p>
    <p class="card-text">Telefono: {{ $restaurante->Telefono }}</p>
   
      <form action="{{ route('restaurante.destroy', $restaurante->id) }}" method="post">
      <a href="{{ route('restaurante.index', $restaurante->id) }}" >Regresar</a>
      <a href="{{ route('restaurante.edit', $restaurante->id) }}" >Editar</a>
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger float-right">Eliminar</button>
        </form> 
  </div>

  @endsection