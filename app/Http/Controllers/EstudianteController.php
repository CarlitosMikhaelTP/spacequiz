<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* METODOS DE CONTROLADOR DE DOCENTE */
class EstudianteController extends Controller
{
    public function HistorialAlumno(){
        return view('Estudiante.HistorialAlumno');
    }
    public function MenuEstudiante(){
        return view('Estudiante.MenuEstudiante');
    }
    public function PreguntasSala(){
        return view('Estudiante.PreguntasSala');
    }
    public function ResultadoEstudiante(){
        return view('Estudiante.ResultadoEstudiante');
    }
}