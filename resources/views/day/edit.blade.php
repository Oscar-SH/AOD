@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row">
        <div class="col"></div>
        <div class="col">
      <form action="{{ route('day.update', $day->id ) }}" method="POST">
@csrf
@method('PUT') 
 
    <div>
        <label for="">Nombre:</label>
        <input class="form-control" value="{{ $day->nombre }}" type="text" name="nombre">
    </div>
    <div>
        <label for="">Puesto</label>
        <input class="form-control" value="{{ $day->puesto }}" type="text" name="puesto">
    </div>
    <div>
        <label for="">Dias laborados</label>
        <input class="form-control" value="{{ $day->dias }}" type="text" name="dias">
    </div>
    <div>
    <label for="">Pago por dia</label>
    <input class="form-control" value="{{ $day->pago }}" type="text" name="pago">
    </div>
    <div>
    <label for="">Total</label>
    <input class="form-control" value="{{ $day->total }}" type="text" name="total">
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