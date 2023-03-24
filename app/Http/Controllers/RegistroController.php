<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegistroController extends Controller
{
    public function index(){
        return view('auth.registro');
    }

    public function store(Request $request){
        //dd es una funcion que permite debbugear variabels
        //dd($request); #me muestra todo el metodo post que estoy llamando

        $request->request->add(['username' => Str::slug($request->username)]);

        $validated = $request->validate([
            'name' => 'required|min:4',
            'username' => 'required|unique:users|min:3|max:15',
            'email' => 'required|unique:users|email|max:50',
            'password' => 'required|min:6|max:50',
            'programa' => 'required|min:6|max:50',
            'semestre' => 'required|min:1|max:15',
            'celular' => 'required|min:9',
            'direccion' => 'required|min:5|max:50',
            'presentacion' => 'required|min:6|max:255',
            'genero' => 'required|min:6|max:20'
        ]);

        User::create([

            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'programa' => $request->programa,
            'semestre' => $request->semestre,
            'celular' => $request->celular,
            'direccion' => $request->direccion,
            'presentacion' => $request->presentacion,
            'genero' => $request->genero,
        ]);

        //autenticacion
        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);
        //Redireccionamiento de rutas
        return redirect()->route('login');
    }
}


