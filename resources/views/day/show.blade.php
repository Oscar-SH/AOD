@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
        <div class="card">
            <div class="card-header">
                Informacion del empleado
            </div>
            <div class="card-body">
                <h5 class="card-title">Nombre: {{ $day->nombre }}</h5>
                <p class="card-text">Sueldo: {{ $day->pago }} <br><br> Dias laborados: {{ $day->dias }}</p>
                <a href="{{ route('day.index') }}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
        <div class="col"></div>
    </div>
</div>
@endsection