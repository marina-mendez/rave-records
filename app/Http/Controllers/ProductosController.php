<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        return view('tienda.producto');
        //return "Pagina principal de productos.";
    }

    public function categoria($categoria){
        return view('tienda.categoria');
        //return "Pagina que muestra la categoría $categoria de producto.";

    }
    public function producto($categoria, $prod){
        return view('tienda.producto');

    }


    /*
    public function categoria($categoria){
        return view('tienda.categoria', ['categoria'=> $categoria]);
        return view('tienda.categoria', compact('categoria'));
    }
    */

}
    /*public function create(){
        //formulario para crear algo: en este caso no sirve
    }*/

