@extends('layout.layout')

@section('content')
<div class="container">
<div class="row">
<!--Izquierda sin campos-->
<div class="col"></div>
<form action="{{ route('corte.update',$corte->id) }}" method="POST">
@csrf
@method('PUT')
<!--Columna izquierda con campos-->
<div class="col">
    <div>
        <label for="">Numero de orden:</label>
        <input class="form-control" value="{{ $corte->Orden }}" type="number" name="Orden" id="">
    </div>
    <div>
        <label for="">Largo del trazo:</label>
        <input class="form-control" value="{{ $corte->Largo }}" type="number" name="Largo" id="">
    </div>
    <div>
        <label for="">Ancho:</label>
        <input class="form-control" value="{{ $corte->Ancho }}" type="number" name="Ancho" id="">
    </div>
    <div>
        <label for="">Proporcion:</label>
        <input class="form-control" value="{{ $corte->Proporcion }}" type="text" name="Proporcion" id="">
    </div>
    <div>
        <label for="">Recibido:</label>
        <input class="form-control" value="{{ $corte->Recibido }}" type="number" name="Recibido" id="">
    </div>
    <div>
        <label for="">Consumido:</label>
        <input class="form-control" value="{{ $corte->Consumido }}" type="number" name="Consumido" id="">
    </div>
</div>
<!--Columna derecha con campos-->
<div class="col">
    <div>
        <label for="">Retaceria:</label>
        <input class="form-control" value="{{ $corte->Retaceria }}" type="number" name="Retaceria" id="">
    </div>
    <div>
        <label for="">Faltante:</label>
        <input class="form-control" value="{{ $corte->Faltante }}" type="number" name="Faltante" id="">
    </div>
    <div>
        <label for="">Numero de cuerpos:</label>
        <input class="form-control" value="{{ $corte->Cuerpos }}" type="number" name="Cuerpos" id="">
    </div>
    <div>
        <label for="">Numero de lienzos:</label>
        <input class="form-control" value="{{ $corte->Lienzos }}" type="number" name="Lienzos" id="">
    </div>
    <div>
        <label for="">Piezas cortadas:</label>
        <input class="form-control" value="{{ $corte->Piezas }}" type="number" name="Piezas" id="">
    </div>
    <br>
    <div>
        <input class="btn btn-secondary" type="reset" value="Borrar">
        <input class="btn btn-primary" type="submit" value="Registrar">
    </div>
</div>
</form>
</div>
        <div class="col"></div>
        </div>
    </div>

@endsection