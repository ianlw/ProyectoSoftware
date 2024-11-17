@extends('adminlte::page')

@section('title', 'Crear Semestres')

@section('content_header')
    <h1>Crear nuevo semestre</h1>
@stop

@section('content')
    <div class="container">
        <!-- <h1>Crear Semestre</h1> -->
        <form action="{{ route('semestres.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id_semestre">ID Semestre</label>
                <input type="text" class="form-control" id="id_semestre" name="id_semestre" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="fecha_inicio">Fecha de Inicio</label>
                <input type="datetime-local" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
            </div>
            <div class="form-group">
                <label for="fecha_fin">Fecha de Fin</label>
                <input type="datetime-local" class="form-control" id="fecha_fin" name="fecha_fin" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
