<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuInicioController extends Controller
{
    //Vamos a personalizar aplicando la herencia de programacion OB
    public function MostrarMenuInicio()
    {
        return view('menu-inicio');
    }
}
