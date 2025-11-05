<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuServiciosController extends Controller
{
    //Vamos a personalizar aplicando la herencia de programacion OB
    public function MostrarServicios()
    {
        return view('servicios');
    }
}
