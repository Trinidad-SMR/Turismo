@extends('layout.layout')

@section('title', 'Agregar Zonas Turisticas')

@section('content')

<div class="row">
    <div class="col-sm-10"><h1> Agregar Zona Turistica </h1></div>
    <div class="col-sm-2">
        <a href="{{ route('zonasturisticas.index') }}">
            <button class="btn btn-secondary">Cancelar</button>
        </a>
    </div>
</div>


<div class="jumbotron">
<form method="post" action=" {{ route('zonasturisticas.store') }} ">
    @csrf
    
    <div>
        <label for="">Zona Turistica:</label>
        <input class="form-control" type="text" name="Nombre" id="" required maxlength="100">   
    </div>
    <br>
    <div>
        <label for="">Descripción:</label>
        <textarea class="form-control" name="Descripcion" id="" cols="30" rows="5"></textarea>   
    </div>
    <br>
    <div>
        <label for="">Dirección:</label>
        <input class="form-control" type="text" name="Direccion" id="" required maxlength="100">   
    </div>
    <br>
    <div>
        <label for="">Horario:</label>
        <input class="form-control" type="text" name="Horario" id="">   
    </div>
    <br>
    <div>
        <label for="">Actividades:</label>
        <input class="form-control" type="text" name="Actividades" id="">   
    </div>
     <br>
     <br>
    <input class="btn btn-secondary" type="submit" value="Guardar">

</form>
</div>
@endsection