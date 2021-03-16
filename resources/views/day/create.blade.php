<!--extender el layout-->
@extends('layout.layout')

@section('content')
<div class="container">
<div class="row">
<!--columna izquierda sin campos-->
<div class="col"></div>
<!-- Inicia el formulario-->
<!--columna izquerda con campos-->
<div class="col">
<form action="{{ route('day.store') }}" method="POST">
@csrf
    <div>
        <label for="">Nombre:</label>
        <input class="form-control" placeholder="Nombre" type="text" name="nombre">
    </div>
    <div>
        <label for="">Puesto</label>
        <input class="form-control" placeholder="Puesto" type="text" name="puesto">
    </div>
    <div>
        <label for="">Dias laborados</label>
        <input class="form-control" placeholder="Dias laborados" type="text" name="dias">
    </div>
    <div>
    <label for="">Pago por dia</label>
    <input class="form-control" placeholder="Pago por dia" type="text" name="pago">
    </div>
    <div>
    <label for="">Total</label>
    <input class="form-control" placeholder="Total" type="text" name="total">
    </div>
    <br>
    <div>
        <input class="btn btn-secondary" type="reset" value="Limpiar">
        <input class="btn btn-primary" type="submit" value="Guardar">
    </div>
    </form>
</div>
<!--aqui termina el formulario-->
<!--columna derecha sin campos-->
    <div class="col"></div>
</div>
</div>
@endsection