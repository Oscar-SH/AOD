<!--extender el layout-->
@extends('layout.layout')

@section('content')
<div class="row">
<!--columna izquierda sin campos-->
<div class="col-sm"></div>
<!-- Inicia el formulario-->
<form action="{{ route('fraction.store') }}" method="POST">
@csrf
<!--columna izquerda con campos-->
<div class="col-md">
    <div>
        <label for="">Nombre:</label>
        <input class="form-control" placeholder="Nombre del empleado" type="text" name="nombre" id="">
    </div>
    <div>
        <label for="">Operacion</label>
        <input class="form-control" placeholder="Puesto" type="text" name="puesto" id="">
    </div>
    <div>
        <label for="">Numero de repeticiones</label>
        <input class="form-control" placeholder="Repeticiones" type="number" name="dias" id="">
    </div>
    <div>
    <label for="">Pago por repeticion</label>
    <input class="form-control" placeholder="Pago por repeticion" type="number" name="pago" id="">
    </div>
    <div>
    <label for="">Total</label>
    <input class="form-control" placeholder="Total" type="number" name="total" id="">
    </div>
    <br>
    <div>
        <input class="btn btn-secondary" type="reset" value="Borrar">
        <input class="btn btn-primary" type="submit" value="Registrar">
    </div>
</div>
<!--aqui termina el formulario-->   
</form>
<!--columna derecha sin campos-->
<div class="col-sm"></div>
</div>
@endsection
