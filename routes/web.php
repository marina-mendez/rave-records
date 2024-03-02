<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ClasesController;

//Home
Route::get('/', HomeController::class);

//Tienda
Route::controller(ProductosController::class)->group(function(){
    Route::get('tienda', 'index');
    Route::get('tienda/{categoria}','categoria');
    Route::get('tienda/{categoria}/{producto}', 'producto');
});

//Records
Route::controller(RecordsController::class)->group(function(){
    Route::get('records', 'index');
    Route::get('records/{record}','record');
});

//Login
Route::controller(UsersController::class)->group(function(){
    Route::get('login/cliente', 'cliente');
    Route::get('login/admin', 'admin');
});

//Crear usuario
Route::get('crear', [UsersController::class, 'create']);

//Contacto
Route::get('contacto', ContactController::class);

//AboutUs
Route::get('nosotros', AboutUsController::class);

//Clases
Route::get('clases', ClasesController::class);

//Carrito
Route::controller(ShopController::class)->group(function(){
    Route::get('carrito', 'index');
    Route::get('checkout', 'checkout');
});

//el signo de pregunta nos dice que la variable es opcional:
//si no le pasamos un valor, automáticamente toma el valor de null
// /*Route::get('productos/{variable}/{categoria?}', function ($variable, $categoria = null) {

//     if($categoria){
//         return view('estapagina');
//     }else{
//         return view('otrapagina');
//     }

// });

