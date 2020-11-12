<?php

namespace App\Http\Controllers;

use App\Alumno;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function ver(Alumno $alumno)
    {
        return view('alumnos/ver', compact('alumno'));
    }

    public function crear()
    {
        return view('alumnos/crear');
    }

    public function guardar()
    {
        $alumno = request()->validate([
            'matricula' => 'required',
            'nombre' => 'required',
            'carrera' => 'required',
            'email' => 'required',
            'telefono' => 'required'
        ]);

        Alumno::create($alumno);

        return redirect('/');
    }
}
