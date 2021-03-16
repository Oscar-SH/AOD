@extends('layout.layout')

@section('content')
    <div class="container">
    <br>
    <div class="row">
<div class="col-2">
    <a class='btn btn-primary' href="{{ route('day.create')}}">Nuevo</a>
</div>
    <div class="col-5">
    <h4>Nomina por dia: </h4>
    </div>
    <div class="btn-group col-5" role="group" aria-label="Basic example">
        <a href="{{ route('day.pdf') }}" class="btn btn-dark">PDF</a>
        <a href="/dayXLS" class="btn btn-secondary">XLS</a>
        <a href="/dayCSV" class="btn btn-info">CSV</a>
        <a href="{{ route('day.graficar') }}" class="btn btn-warning">GRAFICAR</a>
    </div>
    <table class="table" >
        <tr class="thead-dark">
            <th>ID</th>
            <th>NOMBRE</th>
            <th>PUESTO</th>
            <th>DIAS LABORADOS</th>
            <th>PAGO POR DIA</th>
            <th>TOTAL</th>
            <th>ACCIONES</th>
        </tr>
   
        @foreach($day as $dey)
        <tr>
            <td>{{ $dey->id }}</td>
            <td>{{ $dey->nombre }}</td>
            <td>{{ $dey->puesto }}</td>
            <td>{{ $dey->dias }}</td>
            <td>{{ $dey->pago }}</td>
            <td>{{ $dey->total }}</td>
            <td>
            <div class="btn-group col-2">
                <form action="{{ route('day.destroy', $dey->id) }}" method="POST">
                <a class="btn btn-info btn-sm" href="{{ route('day.show', $dey->id) }}">Ver</a>
                <a class="btn btn-secondary btn-sm" href="{{ route('day.edit', $dey->id) }}">Editar</a>
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
   {!! $day->links() !!}
@endsection