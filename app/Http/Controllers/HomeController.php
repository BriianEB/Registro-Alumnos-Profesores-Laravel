<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Profesor;

class HomeController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();
        $profesores = Profesor::all();

        return view('home/index', compact('alumnos', 'profesores'));
    }

    public function color()
    {
        return view('home/color');
    }
}
