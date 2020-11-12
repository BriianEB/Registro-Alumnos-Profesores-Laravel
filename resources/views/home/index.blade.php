@extends('shared/layout')

@section('title', 'Alumnos y Profeores')

@section('content')
    <div class="alumnos-section">
        <h2>Lista de alumnos</h2>
        <table class="tabla">
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Nombre</th>
                    <th>Carrera</th>
                    <th>Correo electrónico</th>
                    <th>Teléfono</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr>
                        <td>{{ $alumno->matricula }}</td>
                        <td>{{ $alumno->nombre }}</td>
                        <td>{{ $alumno->carrera }}</td>
                        <td>{{ $alumno->email }}</td>
                        <td>{{ $alumno->telefono }}</td>
                        <td>
                            <a href="alumnos/{{ $alumno->matricula }}">Ver detalles</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6"><span>Total de registros: {{ count($alumnos) }}</span> </td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="profesores-section">
        <h2>Lista de profesores</h2>
        <table class="tabla">
            <thead>
                <tr>
                    <th>No. de Empleado</th>
                    <th>Nombre</th>
                    <th>Carrera</th>
                    <th>Teléfono</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profesores as $profesor)
                    <tr>
                        <td>{{ $profesor->no_empleado }}</td>
                        <td>{{ $profesor->nombre }}</td>
                        <td>{{ $profesor->carrera }}</td>
                        <td>{{ $profesor->telefono }}</td>
                        <td>
                            <a href="profesores/{{ $profesor->no_empleado }}">Ver detalles</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5"><span>Total de registros: {{ count($profesores) }}</span></td>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection
