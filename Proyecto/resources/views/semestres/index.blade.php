@extends('adminlte::page')

@section('title', 'Lista de Semestres')

@section('content_header')
    <h1>Lista de Semestres</h1>
@stop

@section('content')
    <div class="container">
        <a href="{{ route('semestres.create') }}" class="btn btn-primary">Crear Nuevo Semestre</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha de Fin</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($semestres as $semestre)
                    <tr>
                        <td>{{ $semestre->id_semestre }}</td>
                        <td>{{ $semestre->nombre }}</td>
                        <td>
                            @if ($semestre->fecha_inicio instanceof \Carbon\Carbon)
                                {{ $semestre->fecha_inicio->format('d/m/Y H:i') }}
                            @else
                                {{ $semestre->fecha_inicio }}
                            @endif
                        </td>
                        <td>
                            @if ($semestre->fecha_fin instanceof \Carbon\Carbon)
                                {{ $semestre->fecha_fin->format('d/m/Y H:i') }}
                            @else
                                {{ $semestre->fecha_fin }}
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('semestres.edit', $semestre) }}" class="btn btn-warning">Editar</a>
                            <a href="{{ route('semestres.show', $semestre) }}" class="btn btn-warning">Ver</a>
                            <form action="{{ route('semestres.destroy', $semestre) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
