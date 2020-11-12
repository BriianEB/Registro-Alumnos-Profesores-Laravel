@extends('shared/layout')

@section('title', 'Registrar profesor')

@section('content')
    <div class="form-container">
    <h2>Agregar nuevo profesor</h2>
    <form action="/profesores/guardar" method="post">
        @csrf

        <div class="form-group">
            <label for="no_empleado">No. de Empleado</label>
            <input class="form-control" name="no_empleado">
            <span>{{ $errors->first('no_empleado') }}</span>
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
