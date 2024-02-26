<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        return "Pagina principal de productos.";
    }

    public function create(){
        //formulario para crear algo: en este caso no sirve
    }

    public function show($prod){
        //mostrar productos en particular
        return "Pagina que muestra el producto $prod con todas sus características.";

    }
}
