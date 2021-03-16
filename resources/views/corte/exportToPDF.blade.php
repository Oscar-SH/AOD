@extends('layout.layout')

@section('content')
<div>
    <h1>REPORTE DE CORTES</h1>
</div>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>ORDEN</th>
            <th>LARGO</th>
            <th>ANCHO</th>
            <th>PROPORCION</th>
            <th>RECIBIDO</th>
            <th>CONSUMIDO</th>
            <th>RETACERIA</th>
            <th>FALTANTE</th>
            <th>CUERPOS</th>
            <th>LIENZOS</th>
            <th>PIEZAS</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    @foreach($corte as $cut)
<tbody>
<tr>
            <td>{{ $cut->id }}</td>
            <td>{{ $cut->Orden }}</td>
            <td>{{ $cut->Largo }}</td>
            <td>{{ $cut->Ancho }}</td>
            <td>{{ $cut->Proporcion }}</td>
            <td>{{ $cut->Recibido }}</td>
            <td>{{ $cut->Consumido }}</td>
            <td>{{ $cut->Retaceria }}</td>
            <td>{{ $cut->Faltante }}</td>
            <td>{{ $cut->Cuerpos }}</td>
            <td>{{ $cut->Lienzos }}</td>
            <td>{{ $cut->Piezas }}</td>
    </tr>
</tbody>
    @endforeach
</table>

@endsection