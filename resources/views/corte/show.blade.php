@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
        <div class="card">
            <div class="card-header">
                Informacion del corte
            </div>
            <div class="card-body">
                <h5 class="card-title">Numero de orden: {{ $corte->orden }}</h5>
                <p class="card-text">Numero de lienzos: {{ $corte->Lienzos }} <br><br> total de piezas: {{ $corte->Piezas }}</p>
                <a href="{{ route('corte.index') }}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
        <div class="col"></div>
    </div>
</div>
@endsection