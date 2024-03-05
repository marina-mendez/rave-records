<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){

        $productos = Producto::paginate(7);

        return view('tienda.index', compact('productos'));
        //return "Pagina principal de productos.";
    }

    public function categoria($categoria){
        return view('tienda.categoria');
        //return "Pagina que muestra la categoría $categoria de producto.";

    }
    public function producto($id){

        $producto = Producto::find($id);

        return view('tienda.producto', compact('producto'));

    }

    public function create(){
        return view('productos.productoscreate');
    }

    public function modificar(){
        return view('productos.productoscrud');
    }

    /*
    public function categoria($categoria){
        return view('tienda.categoria', ['categoria'=> $categoria]);
        return view('tienda.categoria', compact('categoria'));
    }
    */

}


