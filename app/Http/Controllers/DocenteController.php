<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* METODOS DE CONTROLADOR DE DOCENTE */
class DocenteController extends Controller
{
    public function CodigoSala(){
        return view('Docente.CodigoSala');
    }
    public function ConfiguracionSala(){
        return view('Docente.ConfiguracionSala');
    }
    public function HistorialSalas(){
        return view('Docente.HistorialSalas');
    }
    public function MenuDocente(){
        return view('Docente.MenuDocente');
    }
    public function ResultadoSala(){
        return view('Docente.ResultadoSala');
    }
}
