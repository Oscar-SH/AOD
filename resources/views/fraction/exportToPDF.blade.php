@extends('layout.layout')

@section('content')
<div>
    <h1>Nomina de empresa AEO Modas (POR FRACCION)</h1>
</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>OPERACION</th>
            <th>PRECIO POR REPETICION</th>
            <th>NUMERO DE REPETICIONES</th>
            <th>TOTAL</th>
        </tr>
    </thead>
    @foreach($fraction as $fract)
    <tbody>
        <tr>
            <td>{{ $fract->id }}</td>
            <td>{{ $fract->nombre }}</td>
            <td>{{ $fract->puesto }}</td>
            <td>{{ $fract->pago }}</td>
            <td>{{ $fract->dias }}</td>
            <td>{{ $fract->total }}</td>
        </tr>
    </tbody>
    @endforeach
</table>

@endsection