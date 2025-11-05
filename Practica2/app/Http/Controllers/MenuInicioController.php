<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuInicioController extends Controller
{
    public function MostrarInicio() {
        return view('inicio');
    }
}
