<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpcionesLandingController extends Controller
{
    public function ComoJugar(){
        return view('OpcionesLanding.ComoJugar');
    }
    
    public function Masinformacion(){
        return view('OpcionesLanding.Masinformacion');
    }
}
