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

    public function panelcliente($id){
        $user = User::find($id);

        return view('panel.panelclient', compact('user'));
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

    
    public function userscrud()
    {
        $users = User::paginate();

        return view('users.userscrud', compact('users'));
    }
    
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }
    

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('userscrud')->with('success', 'Usuario eliminado exitosamente.');
    }

    public function update(Request $request, $id)
{
    $user = User::findOrFail($id);
    $user->update($request->all());

    return redirect()->route('userscrud')->with('success', 'Usuario actualizado exitosamente.');
}


    public function store(Request $request){
        $user= new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->id_tipo_usuario= $request->id_tipo_usuario;

        $user->save();

        if($request->id_tipo_usuario == "2"){
            return redirect()->route('panel.panelclient', $user);
        }else{
            return redirect()->route('panel.paneladmin', $user);
        }
    }
}
