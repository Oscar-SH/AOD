@extends('layout.layout')

@section('content')
<div class="container">
    <br>
    <div class="row">
    <div class="col-3">
    <a class="btn btn-outline-Secondary" href="{{ route('corte.create') }}">Para crear nuevo</a>
    </div>
    <div class="col-5">
    <h4>REPORTE DE CORTES: </h4>
    </div>
    <div class="btn-group col-4" role="group" aria-label="Basic example">
    <a href="{{ route('corte.pdf') }}" class="btn btn-dark btn-sm">PDF</a>
    <a href="/corteXLS" class="btn btn-secondary btn-sm">XLS</a>
    <a href="/corteCSV" class="btn btn-info btn-sm">CSV</a>
    <a href="{{ route('corte.graficar') }}" class="btn btn-warning">GRAFICAR</a>
    </div>
    <table class="table">
        <tr class="thead-dark">
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
        @foreach($corte as $cut)
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
            <td>
            <div class="btn-group" role="group">
                <form action="{{ route('corte.destroy', $cut->id) }}" method="POST">
                <a class="btn btn-info btn-sm" href="{{ route('corte.show', $cut->id) }}">Ver</a>
                <a class="btn btn-secondary btn-sm" href="{{ route('corte.edit', $cut->id) }}">Editar</a>
                @csrf
                @method('DELETE')
                <input class="btn btn-danger btn-sm" type="submit" value="Eliminar">
                <div class="alert alert-primary" role="alert">
  This is a primary alert—check it out!
</div>
                </form>
                </div>
            </td>
        </tr>
        @endforeach
   </table>
   </div>
</div>
   {!! $corte->links() !!}
@endsection