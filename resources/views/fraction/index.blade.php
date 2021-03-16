@extends('layout.layout')

@section('content')
<div class="container">
<br>
    <div class="row">
    <div class="col-3">
        <a class="btn btn-outline-Secondary" href="{{ route('fraction.create')}}">Para crear nuevo</a>
    </div>
    <div class="col-5">
    <h4>Nomina por fraccion: </h4>
    </div>
    <div class="btn-group col-4" role="group" aria-label="Basic example">
    <a href="{{ route('fraction.pdf') }}" class="btn btn-dark btn-sm">PDF</a>
    <a href="/fractionXLS" class="btn btn-secondary btn-sm">XLS</a>
    <a href="/fractionCSV" class="btn btn-info btn-sm">CSV</a>
    <a href="{{ route('fraccion.graficar') }}" class="btn btn-warning">GRAFICAR</a>
    </div>
        <table class="table">
            <tr class="thead-dark">
                <th>ID</th>
                <th>NOMBRE</th>
                <th>OPERACION</th>
                <th>REPETICIONES</th>
                <th>PAGO POR REPETICION</th>
                <th>TOTAL</th>
                <th>ACCIONES</th>
            </tr>
             @foreach($fraction as $fract)
            <tr>
                <td>{{ $fract->id }}</td>
                <td>{{ $fract->nombre }}</td>
                <td>{{ $fract->puesto }}</td>
                <td>{{ $fract->dias }}</td>
                <td>{{ $fract->pago }}</td>
                <td>{{ $fract->total }}</td>
            <td>
                <div class="btn-group" role="group">
                <form action="{{ route('fraction.destroy', $fract->id) }}" method="POST">
                <a class="btn btn-info btn-sm" href="{{ route('fraction.show', $fract->id) }}">Ver</a>
                <a class="btn btn-secondary btn-sm" href="{{ route('fraction.edit', $fract->id) }}">Editar</a>
                @csrf
                @method('DELETE')
                <input class="btn btn-danger btn-sm" type="submit" value="Eliminar">
                </form>
                </div>
            </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
{!! $fraction->links() !!}
@endsection