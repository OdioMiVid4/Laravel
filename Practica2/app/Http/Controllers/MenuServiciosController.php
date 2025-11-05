<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuServiciosController extends Controller
{
    public function MostrarServicios() {
        return view('servicios');
    }
}
