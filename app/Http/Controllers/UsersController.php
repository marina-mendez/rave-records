<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function admin(){
        return view('login.admin');
    }

    public function cliente(){
        return view('login.cliente');
    }

    public function create(){
        return view('login.create');
    }
}
