@extends('layout.dashboard')

@section('title', 'Zonas Turisticas')

@section('content')

<div class="row">
    <div class="col"><h1> <center><a href="https://www.fontspace.com/category/bold">
    <img src="https://see.fontimg.com/api/renderfont4/ALEmp/eyJyIjoiZnMiLCJoIjo2NSwidyI6MTAwMCwiZnMiOjY
    1LCJmZ2MiOiIjMDAwMDAwIiwiYmdjIjoiI0ZGRkZGRiIsInQiOjF9/em9uYXMgdHVyw61zdGljYXM/mandhor.png" 
    alt="Bold fonts"></center></a></h1></div>
    <div class="col"></div>
    <div class="col"><a href="{{ route('zonaTuristica.create') }}">
    <button class="btn btn-success float-right"> <h7>Agregar</h7></button></a></div>
</div>

@forelse($zonaTuristica as $zona)

    <div class="row">
        <div class="card border-primary mb-3" style="width: 100rem;">
            <img src="" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><center>{{ $zona->Nombre  }}</center></h5>
                <p class="card-text"> Descripción: {{ $zona->Descripcion }}</p>
                <p class="card-text">Dirección: {{ $zona->Direccion }}</p>
                <p class="card-text">Horario: {{ $zona->Horario }}</p>
                <p class="card-text">Actividades: {{ $zona->Actividades  }}</p>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger float-right">Eliminar</button>
                <form action="{{ route('zonaTuristica.destroy', $zona->id) }}" method="post">
                <a href="{{ route('zonaTuristica.edit', $zona->id) }}" class="btn btn-primary float-right">Editar</a>
                <a href="{{ route('zonaTuristica.show', $zona->id) }}" class="btn btn-primary float-right ">Ver</a>
                </form> 

            </div>
        </div>
    </div>
<br>
@empty
 <div> <h3> No hay registros de Zonas en la base de datos  </h3> </div>
@endforelse

{{ $zonaTuristica->links() }}

@endsection