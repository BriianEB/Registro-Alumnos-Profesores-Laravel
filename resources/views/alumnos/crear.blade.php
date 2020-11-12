@extends('shared/layout')

@section('title', 'Registrar alumno')

@section('content')
    <div class="form-container">
    <h2>Agregar nuevo alumno</h2>
    <form action="/alumnos/guardar" method="post">
        @csrf

        <div class="form-group">
            <label for="matricula">Matrícula</label>
            <input class="form-control" name="matricula">
            <span>{{ $errors->first('matricula') }}</span>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input class="form-control" name="nombre">
            <span>{{ $errors->first('nombre') }}</span>
        </div>
        <div class="form-group">
            <label for="carrera">Carrera</label>
            <input class="form-control" name="carrera">
            <span>{{ $errors->first('carrera') }}</span>
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input class="form-control" name="email">
            <span>{{ $errors->first('email') }}</span>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input class="form-control" name="telefono">
            <span>{{ $errors->first('telefono') }}</span>
        </div>
        <div class="button-container">
            <button type="submit" class="boton" name="guardar">Guardar</button>
        </div>
    </form>
</div>
@endsection
