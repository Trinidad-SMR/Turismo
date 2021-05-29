@extends('layout.layout')

@section('title', 'Agregar Restaurante')

@section('content')

<div class="row">
    <div class="col-sm-10"><h1> Agregar Restaurante </h1></div>
    <div class="col-sm-2">
        <a href="{{ route('restaurante.index') }}">
            <button class="btn btn-secondary">Cancelar</button>
        </a>
    </div>
</div>


<form method="post" action=" {{ route('restaurante.store') }} ">
    @csrf
    
    <div>
        <label for="">Restaurante:</label>
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