<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesor;

class ProfesoresController extends Controller
{
    public function ver(Profesor $profesor)
    {
        return view('profesores/ver', compact('profesor'));
    }

    public function crear()
    {
        return view('profesores/crear');
    }

    public function guardar()
    {
        $profesor = request()->validate([
            'no_empleado' => 'required',
            'nombre' => 'required',
            'carrera' => 'required',
            'telefono' => 'required'
        ]);

        Profesor::create($profesor);

        return redirect('/');
    }
}
