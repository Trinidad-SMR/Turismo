@extends('layout.layout')

@section('title', 'Zonas Turisticas')

@section('content')

<div class="row">
    <div class="col"><h1> Zonas Turisticas </h1></div>
    <div class="col"></div>
    <div class="col"><a href="{{ route('zonasturisticas.create') }}">
    <button class="btn btn-success">Agregar</button></a></div>
</div>

@forelse($zonasturisticas as $zonaTuristica)

    <div class="row">
        <div class="card border-primary mb-3" style="width: 100rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><center>{{ $zonaTuristica->id  }}  </center></h5>
                <h5 class="card-title"><center>{{ $zonaTuristica->Nombre  }}</center></h5>
                <p class="card-text"> Descripción: {{ $zonaTuristica->Descripcion }}</p>
                <p class="card-text">Dirección: {{ $zonaTuristica->Direccion }}</p>
                <p class="card-text">Horario: {{ $zonaTuristica->Horario }}</p>
                <p class="card-text">Actividades: {{ $zonaTuristica->Actividades  }}</p>
                <form action="{{ route('zonasturisticas.destroy', $zonaTuristica->id) }}" method="post">
                    <a href="{{ route('zonasturisticas.show', $zonaTuristica->id) }}">Ver</a>
                    <a href="{{ route('zonasturisticas.edit', $zonaTuristica->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form> 
            </div>
        </div>
    </div>
<br>
@empty
 <div> <h3> No hay registros de Zonas en la base de datos  </h3> </div>
@endforelse

{{ $zonasturisticas->links() }}

@endsection