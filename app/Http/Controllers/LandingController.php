<?php

namespace App\Http\Controllers; /* DEFINIR LUGAR DEL ARCHIVO */

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //Declarando método invoke para traer contenido cuando solo hay una opción
    public function __invoke(){
        return view('landing');
    }
}
