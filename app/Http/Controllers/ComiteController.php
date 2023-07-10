<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComiteController extends Controller
{
    public function ComiteConfiguracion(){
        return view('Comite.ComiteConfiguracion');
    }
    public function ComiteCrear(){
        return view('Comite.ComiteCrear');
    }
    public function ComiteListar(){
        return view('Comite.ComiteListar');
    }
    public function ComitePanel(){
        return view('Comite.ComitePanel');
    }
}
