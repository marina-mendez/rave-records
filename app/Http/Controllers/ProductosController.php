<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        return "Pagina principal de productos.";
    }

    public function categoria($categoria){
        return "Pagina que muestra la categoría $categoria de producto.";

    }

    public function producto($prod){
        return view('productos.producto');

    }
}
    /*public function create(){
        //formulario para crear algo: en este caso no sirve
    }*/

