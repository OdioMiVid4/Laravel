<?php

use Illuminate\Support\Facades\Route;

/* Extraemos todos los controladores */
use App\Http\Controllers\QuienesSomosController;
use App\Http\Controllers\MenuInicioController;
use App\Http\Controllers\MenuServiciosController;
use App\Http\Controllers\MenuUbicacionController;
use App\Http\Controllers\MenuProductosController;
use App\Http\Controllers\MenuContactoController;

/* Ruta principal */
Route::get('/', function () {
    return view('welcome');
});

/*Establecer la ruta en Laravel
quienes-somos (la vista)
QuienesSomosController (El controlador)
MostrarQuienesSomos (La funcion del controlador) */

/* Ruta para Quienes Somos */
Route::get('/quienes-somos', [QuienesSomosController::class, 'MostrarQuienesSomos']);



/* INICIO */
Route::get('/inicio', [MenuInicioController::class, 'MostrarInicio']);

/* SERVICIOS */
Route::get('/servicios', [MenuServiciosController::class, 'MostrarServicios']);

/* UBICACIÓN */
Route::get('/ubicacion', [MenuUbicacionController::class, 'MostrarUbicacion']);

/* PRODUCTOS */
Route::get('/productos', [MenuProductosController::class, 'MostrarProductos']);

/* CONTACTO */
Route::get('/contacto', [MenuContactoController::class, 'MostrarContacto']);

