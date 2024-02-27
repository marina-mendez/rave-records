<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        return view('shop.carrito');
    }

    public function record($record){
        return view('shop.checkout');
    }
}
