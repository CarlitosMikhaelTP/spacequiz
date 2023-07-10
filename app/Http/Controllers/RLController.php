<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RLController extends Controller
{
    public function Login(){
        return view('RL.Login');
    }
    public function RegistroComite(){
        return view('RL.RegistroComite');
    }
    public function RegistroDocente(){
        return view('RL.RegistroDocente');
    }
    public function RegistroEstudiante(){
        return view('RL.RegistroEstudiante');
    }
    public function RegistroTipo(){
        return view('RL.RegistroTipo');
    }
}
