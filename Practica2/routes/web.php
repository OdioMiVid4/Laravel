<?php

use Illuminate\Support\Facades\Route;

/*Extraemos el controlador */
use App\Http\Controllers\QuienesSomosController;

use App\Http\Controllers\MenuInicioController;

use App\Http\Controllers\MenuServiciosController;

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Establecer la ruta en Laravel
quienes-somos (la vista)
QuienesSomosController (El controlador)
MostrarQuienesSomos (La funcion del controlador) */

Route::get('/quienes-somos', [QuienesSomosController::class,'MostrarQuienesSomos']);

Route::get('/menu-inicio', [MenuInicioController::class, 'MostrarMenuInicio']);

Route::get('/servicios', [MenuServiciosController::class, 'MostrarServicios']);

/*Vamos a crear algunas rutas*/
Route::get('ventas', function () {
    return "Ruta de venta";
});

Route::get('productos', function () {
    return "Ruta de productos";
});

Route::get('clientes', function () {
    return "Ruta de clientes";
});

Route::get('proveedores', function () {
    return "Ruta de proveedores";
});


/*Variable con parametro de entrada */
Route::get('ventas/{id}', function ($id) {
    return "Detalles de la venta con ID: " . $id;
});

Route::get('productos/{nombre}', function ($nombre) {
    return "Información del producto: " . $nombre;
});

Route::get('clientes/{cliente}', function ($cliente) {
    return "Perfil del cliente: " . $cliente;
});



/*Doble variable */
Route::get('proveedores/{proveedor}/{ciudad}', function ($proveedor, $ciudad) {
    return "Proveedor: " . $proveedor . " en la ciudad de " . $ciudad;
});

Route::get('ventas/{id}/{fecha}', function ($id, $fecha) {
    return "Venta ID: " . $id . " realizada el " . $fecha;
});
