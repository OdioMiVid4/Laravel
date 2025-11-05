<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuienesSomosController extends Controller
{
    //Vamos a personalizar aplicando la herencia de programacion OB
    public function MostrarQuienesSomos()
    {
        return view('quienes-somos');
    }
}
