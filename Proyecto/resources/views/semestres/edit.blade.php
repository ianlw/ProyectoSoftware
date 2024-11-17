@extends('adminlte::page')

@section('title', 'Editar Semestres')

@section('content_header')
    <h1>Editar un semestre</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{ route('semestres.update', $semestre) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_semestre">ID Semestre</label>
                <input type="text" class="form-control" id="id_semestre" name="id_semestre"
                    value="{{ $semestre->id_semestre }}" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $semestre->nombre }}"
                    required>
            </div>
            <div class="form-group">
                <label for="fecha_inicio">Fecha de Inicio</label>
                <input type="datetime-local" class="form-control" id="fecha_inicio" name="fecha_inicio"
                    value="{{ $semestre->fecha_inicio->format('Y-m-d\TH:i') }}" required>
            </div>
            <div class="form-group">
                <label for="fecha_fin">Fecha de Fin</label>
                <input type="datetime-local" class="form-control" id="fecha_fin" name="fecha_fin"
                    value="{{ $semestre->fecha_fin->format('Y-m-d\TH:i') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
