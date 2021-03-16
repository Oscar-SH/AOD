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
                <h5 class="card-title">Nombre: {{ $fraction->nombre }}</h5>
                <p class="card-text">Precio por repeticion: {{ $fraction->pago }} <br><br> Numero de repeticiones: {{ $fraction->dias }}</p>
                <a href="{{ route('fraction.index') }}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
        <div class="col"></div>
    </div>
</div>
@endsection