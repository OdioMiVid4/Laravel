<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return "Bienvenido a mi aplicacion Laravel 10 php";
});

/*Vamos a crear algunas rutas*/
Route::get('personal', function () {
    return "Bienvenido al área personal";
});

/*Variable con parametro de entrada */
Route::get('personal/{personal}', function ($personal) {
    return "Bienvenido al área de recursos humanos: " . $personal;
});

/*Doble variable */
Route::get('curso/{curso}/{categoria}', function ($curso, $categoria) {
    return 'Bienvenido al curso '. $curso .' de la categoria '. $categoria;
});

