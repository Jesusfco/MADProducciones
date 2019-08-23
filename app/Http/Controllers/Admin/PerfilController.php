<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class PerfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); 
    }

    public function index(){
        return view('app/perfil/show');
    }

    public function edit(){
        return view('app/perfil/edit');
    }

    public function update(Request $re) {
        
        $user = Auth::user();
        if(!User::validateUniqueEmail($re, $user) ) return back()->with('email', "Este correo $re->email ya fue asignado");

        $user->name = $re->name;
        $user->patern = $re->patern;
        $user->matern = $re->matern;
        $user->phone = $re->phone;
        $user->email = $re->email;
        $user->gender = $re->gender;
        $user->save();

        if($re->img) 
            $user->uploadPhotoPerfil($re->file('img'));
        
        return back()->with('msj', 'Tu perfil se ha actualizado correctamente');

    }

    public function password() {
        return view('app/perfil/password');
    }

    public function passwordUpdate(Request $re) {
        $user = Auth::user();
        $user->password = bcrypt($re->password);
        $user->save();
        return back()->with('msj', 'Tu contraseña ha sido actualizada');
    }
}
