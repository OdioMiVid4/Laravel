<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuUbicacionController extends Controller
{
    public function MostrarUbicacion()
    {
        return view('ubicacion');
    }
}
