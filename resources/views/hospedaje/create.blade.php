@extends('layout.layout')

@section('title', 'Agregar Hotel')

@section('content')

<div class="row">
    <div class="col-sm-10"><h1> Agregar Hotel </h1></div>
    <div class="col-sm-2">
        <a href="{{ route('hospedaje.index') }}">
            <button class="btn btn-secondary">Cancelar</button>
        </a>
    </div>
</div>

<form method="post" action=" {{ route('hospedaje.store') }} ">
    @csrf
    
    <div>
        <label for="">Hotel:</label>
        <input class="form-control" type="text" name="Nombre" id="" required maxlength="100">   
    </div>
    <br>
    <div>
        <label for="">Dirección:</label>
        <input class="form-control" type="text" name="Direccion" id="" required maxlength="100">   
    </div>
    <br>
    <div>
        <label for="">Tipo:</label>
        <input class="form-control" type="text" name="Tipo" id="">   
    </div>
    <br>
    <div>
        <label for="">Telefono:</label>
        <input class="form-control" type="text" name="Telefono" id="">   
    </div>
     <br>
     <br>
    <input class="btn btn-secondary" type="submit" value="Guardar">

</form>
</div>
@endsection