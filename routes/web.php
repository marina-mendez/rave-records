<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UsersController;

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

//Carrito
Route::controller(ShopController::class)->group(function(){
    Route::get('carrito', 'index');
    Route::get('checkout', 'checkout');
});

