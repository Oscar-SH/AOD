@extends('layout.layout')

@section('content')
<div class="row">
<!--Izquierda sin campos-->
<div class="col-sm"></div>
<form action="{{ route('corte.store') }}" method="POST">
@csrf
<!--Columna izquierda con campos-->
<div class="col-md">
    <div>
        <label for="">Numero de orden:</label>
        <input class="form-control" placeholder="Numero de orden" type="number" name="Orden" id="">
    </div>
    <div>
        <label for="">Largo del trazo:</label>
        <input class="form-control" placeholder="Largo del trazo" type="number" name="Largo" id="">
    </div>
    <div>
        <label for="">Ancho:</label>
        <input class="form-control" placeholder="Ancho" type="number" name="Ancho" id="">
    </div>
    <div>
        <label for="">Proporcion:</label>
        <input class="form-control" placeholder="Proporcion" type="text" name="Proporcion" id="">
    </div>
    <div>
        <label for="">Recibido:</label>
        <input class="form-control" placeholder="Recibido" type="number" name="Recibido" id="">
    </div>
    <div>
        <label for="">Consumido:</label>
        <input class="form-control" placeholder="Consumido" type="number" name="Consumido" id="">
    </div>
</div>
<!--Columna derecha con campos-->
<div class="col-md">
    <div>
        <label for="">Retaceria:</label>
        <input class="form-control" placeholder="Retaceria" type="number" name="Retaceria" id="">
    </div>
    <div>
        <label for="">Faltante:</label>
        <input class="form-control" placeholder="Faltante" type="number" name="Faltante" id="">
    </div>
    <div>
        <label for="">Numero de cuerpos:</label>
        <input class="form-control" placeholder="Cuerpos" type="number" name="Cuerpos" id="">
    </div>
    <div>
        <label for="">Numero de lienzos:</label>
        <input class="form-control" placeholder="Lienzos" type="number" name="Lienzos" id="">
    </div>
    <div>
        <label for="">Piezas cortadas:</label>
        <input class="form-control" placeholder="Total de piezas" type="number" name="Piezas" id="">
    </div>
    <br>
    <div>
        <input class="btn btn-secondary" type="reset" value="Borrar">
        <input class="btn btn-primary" type="submit" value="Registrar">
    </div>
</div>
</form>
<!--Columna derecha con campos-->
<div class="col-sm"></div>
</div>
@endsection