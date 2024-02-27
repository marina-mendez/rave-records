<?php

use App\Http\Controllers\AboutUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsersController;

//Home
Route::get('/', HomeController::class);

//Productos
Route::controller(ProductosController::class)->group(function(){
    Route::get('productos', 'index');
    Route::get('productos/{categoria}','categoria');
    Route::get('productos/{categoria}/{producto}', 'producto');
});

//Records

//Login
Route::controller(UsersController::class)->group(function(){
    Route::get('login/cliente', 'cliente');
    Route::get('login/admin', 'admin');
});

//Contacto
Route::get('contacto', [AboutUsController::class, 'index']);


//el signo de pregunta nos dice que la variable es opcional:
//si no le pasamos un valor, automáticamente toma el valor de null
Route::get('productos/{variable}/{categoria?}', function ($variable, $categoria = null) {

    if($categoria){
        return view('estapagina');
    }else{
        return view('otrapagina');
    }

});

