<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesionController extends Controller
{
    public function index(){
        return view('auth.sesion');
    }

    public function store(Request $request){
        //dd es una funcion que permite debbugear variabels
        //dd($request); #me muestra todo el metodo post que estoy llamando

        
        $validated = $request->validate([
            'username' => 'required|min:3|max:15',
            'password' => 'required|min:6|max:50'
        ]);

        if(!auth()->attempt($request->only('username','password'))) {
            //dd("Iniciando sesion");
            return back()->with('mensaje', 'Usuario o contraseña incorrecta');
        }

        return redirect()->route('accesoseguro');
    }
}
