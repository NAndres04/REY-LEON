<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImagenController extends Controller
{
    public function store(Request $request){

       $imagen = $request->file('file');
       //para establecer nombres unicos
       $nombreImagen = Str::uuid() . "." . $imagen->extension();

       $imagenServidor = Image::make($imagen);

       $imagenServidor->fit(3000,3000); //para modificar pixeles

       $imagenPath = public_path('uploads') . '/' . $nombreImagen;
       $imagenServidor->save($imagenPath);

       return response()->json(['imagen' => $nombreImagen]);
    }
}
