<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class imgController extends Controller
{
    public function store(Request $request){
        $imagen = $request->file('file');

        $nombreImagen = Str::uuid() . "." . $imagen->extension();

        $imagenPath = public_path('uploads'). '/' . $nombreImagen;

        Image::make($imagen)->fit(800, 800)->save($imagenPath);

        return response()->json(['imagen' => $nombreImagen]);
    }
}
