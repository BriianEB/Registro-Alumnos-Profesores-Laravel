@extends('shared/layout')

@section('title', 'Ver profesor')

@section('content')
    <div class="alumnos-section">
        <h2>Detalles del profesor</h2>
        <table class="tabla-detalles">
            <thead>
                <tr>
                    <th>Detalles del profesor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $profesor->no_empleado }}</td>
                </tr>
                <tr>
                    <td>{{ $profesor->nombre }}</td>
                </tr>
                <tr>
                    <td>{{ $profesor->carrera }}</td>
                </tr>
                <tr>
                    <td>{{ $profesor->telefono }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
