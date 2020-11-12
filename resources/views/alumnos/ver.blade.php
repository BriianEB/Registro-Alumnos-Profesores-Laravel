@extends('shared/layout')

@section('title', 'Ver alumno')

@section('content')
    <div class="alumnos-section">
        <h2>Detalles del alumno</h2>
        <table class="tabla-detalles">
            <thead>
                <tr>
                    <th>Detalles del alumno</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $alumno->matricula }}</td>
                </tr>
                <tr>
                    <td>{{ $alumno->nombre }}</td>
                </tr>
                <tr>
                    <td>{{ $alumno->carrera }}</td>
                </tr>
                <tr>
                    <td>{{ $alumno->email }}</td>
                </tr>
                <tr>
                    <td>{{ $alumno->telefono }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
