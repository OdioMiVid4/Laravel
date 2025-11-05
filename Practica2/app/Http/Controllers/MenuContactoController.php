<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuContactoController extends Controller
{
    public function MostrarContacto() {
        return view('contacto');
    }
}
