@extends('layout.layout')

@section('content')
<div>
    <h1>Nomina de empresa AEO Modas </h1>
</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>PUESTO</th>
            <th>PAGO POR DIA</th>
            <th>DIAS LABORADOS</th>
            <th>TOTAL</th>
        </tr>
    </thead>
    @foreach($day as $dey)
    <tbody>
        <tr>
            <td>{{ $dey->id }}</td>
            <td>{{ $dey->nombre }}</td>
            <td>{{ $dey->puesto }}</td>
            <td>{{ $dey->pago }}</td>
            <td>{{ $dey->dias }}</td>
            <td>{{ $dey->total }}</td>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection