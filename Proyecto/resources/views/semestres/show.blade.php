@extends('adminlte::page')

@section('title', 'Ver Semestres')

@section('content_header')
    <h1>Ver un semestre</h1>
@stop

@section('content')
    <div class="container">
        <h1>Detalles del Semestre</h1>
        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{ $semestre->id_semestre }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ $semestre->nombre }}</td>
            </tr>
            <tr>
                <th>Fecha de Inicio</th>
                <td>{{ $semestre->fecha_inicio }}</td>
            </tr>
            <tr>
                <th>Fecha de Fin</th>
                <td>{{ $semestre->fecha_fin }}</td>
            </tr>
        </table>
        <a href="{{ route('semestres.index') }}" class="btn btn-primary">Regresar</a>
    </div>
@endsection
