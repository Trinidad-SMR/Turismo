@extends('layout.layout')

@section('title', 'Ver Zonas Turisticas')

@section('content')

    <div class="row">
        <div class="card border-primary mb-3" style="width: 100rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><center>{{ $zonaTuristica->Nombre  }}</center></h5>
                <p class="card-text"> Descripción: {{ $zonaTuristica->Descripcion }}</p>
                <p class="card-text">Dirección: {{ $zonaTuristica->Direccion }}</p>
                <p class="card-text">Horario: {{ $zonaTuristica->Horario }}</p>
                <p class="card-text">Actividades: {{ $zonaTuristica->Actividades  }}</p>
                <form action="{{ route('zonaTuristica.destroy', $zonaTuristica->id) }}" method="post">
                    <a href="{{ route('zonaTuristica.index', $zonaTuristica->id) }}">Regresar</a>
                    <a href="{{ route('zonaTuristica.edit', $zonaTuristica->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form> 
            </div>
        </div>
    </div>
<br>

@endsection