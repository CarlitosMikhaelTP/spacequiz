<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    // logica
    // Consultar la bd
    public function index(int $user_id): view
    {
        // Ser bien específicos en los datos que esperamos y que queramos retornar
       //dd($user_id);

        return view('welcome'); 
    }
}
