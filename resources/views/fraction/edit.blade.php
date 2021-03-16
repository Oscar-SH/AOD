@extends('layout.layout')

@section('content')
<div class="container">
        <div class="row">
        <div class="col"></div>
        <div class="col">
      <form action="{{ route('fraction.update', $fraction->id) }}" method="POST">
@csrf
@method('PUT') 
 
    <div>
        <label for="">Nombre:</label>
        <input class="form-control" value="{{ $fraction->nombre }}" type="text" name="nombre">
    </div>
    <div>
        <label for="">Operacion</label>
        <input class="form-control" value="{{ $fraction->puesto }}" type="text" name="puesto">
    </div>
    <div>
        <label for="">Numero de repeticiones</label>
        <input class="form-control" value="{{ $fraction->dias }}" type="number" name="dias">
    </div>
    <div>
    <label for="">Pago por repeticion</label>
    <input class="form-control" value="{{ $fraction->pago }}" type="number" name="pago">
    </div>
    <div>
    <label for="">Total</label>
    <input class="form-control" value="{{ $fraction->total }}" type="number" name="total">
    </div>
    <div>
        <input class="btn btn-secondary" type="reset" value="Limpiar">
        <input class="btn btn-primary" type="submit" value="Guardar">
    </div>
    </form>
        </div>
        <div class="col"></div>
        </div>
    </div>
@endsection