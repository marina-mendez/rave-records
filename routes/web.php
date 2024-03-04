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
    //Route::get('tienda/{categoria}','categoria');
    Route::get('tienda/{id}', 'producto')->name("producto.show");

    Route::get('productoscreate', 'create')->name('productoscreate');
    Route::get('productoscrud', 'create')->name('productoscrud');
});

//Records
Route::controller(RecordsController::class)->group(function(){
    Route::get('records', 'index');
});

//Login y panel de control
Route::controller(UsersController::class)->group(function(){
    Route::get('login/cliente', 'cliente');
    Route::get('paneldecontrol', 'paneladmin')->name('panel.paneladmin');
    Route::get('paneldelcliente', 'paneladmin')->name('panel.panelclient');
    Route::get('login/admin', 'admin');
});

//Crear usuario
Route::get('crear', [UsersController::class, 'create']);
Route::post('crear', [UsersController::class, 'store'])->name('cursos.store');

//Crear administrador y mostrar usuarios
Route::get('userscreate', [UsersController::class, 'create'])->name('create');
Route::get('userscrud', [UsersController::class, 'userscrud'])->name('userscrud');
Route::get('users/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::delete('users/{id}/destroy', [UsersController::class, 'destroy'])->name('users.destroy');
Route::put('users/{user}', [UsersController::class, 'update'])->name('users.update');


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

