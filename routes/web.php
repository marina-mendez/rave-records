<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;


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

Route::get('/', HomeController::class);

Route::get('productos', function () {
    return view('productos');
});

//si pusiéramos esta ruta luego de la que sigue, nunca se llegaría a leer.
Route::get('productos/otraurl', function () {
    return view('unapagina');
});

Route::get('productos/{variable}', function ($variable) {
    return view('otrapagina');
});

Route::get('productos/{variable}/{categoria}', function ($variable, $categoria) {
    return view('otrapagina');
});

//el signo de pregunta nos dice que la variable es opcional:
//si no le pasamos un valor, automáticamente toma el valor de null
Route::get('productos/{variable}/{categoria?}', function ($variable, $categoria = null) {

    if($categoria){
        return view('estapagina');
    }else{
        return view('otrapagina');
    }

});

