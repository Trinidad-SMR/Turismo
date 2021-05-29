@extends('layout.layout')

@section('title', 'Hoteles')

@section('content')

<div class="table-responsive">
<table class="kd-table kd-tableone table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Telefono</th>
      <th scope="col">Dirección</th>
      <th scope="col">Tipo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $hospedaje->Nombre  }}</td>
      <td>{{ $hospedaje->Telefono }}</td>
      <td>{{ $hospedaje->Direccion }}</td>
      <td>{{ $hospedaje->Tipo }}</td>
  
   <td> <form action="{{ route('hospedaje.destroy', $hospedaje->id) }}" method="post">
    <a href="{{ route('hospedaje.edit', $hospedaje->id) }}" class="card-link">Editar</a> 
      <a href="{{ route('hospedaje.show', $hospedaje->id) }}" class="card-link">Ver</a>
    @csrf
      @method('DELETE')
       <button type="submit" class="btn btn-danger float-right">Eliminar</button>
      </td>
      </tr>
  </tbody>
</table>
</div>