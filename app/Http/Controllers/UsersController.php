<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function admin(){
        return view('login.admin');
    }

    public function paneladmin(){
        $users = User::paginate();

        return view('panel.paneladmin', compact('users'));
    }

    public function cliente(){
        return view('login.cliente');
    }

    public function create(){
        return view('login.create');
    }

    public function usercreate(){
        return view('users.usercreate');
    }

    
    public function userscrud(){
        return view('users.userscrud');
    }
}
