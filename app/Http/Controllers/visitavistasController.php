<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\informativo;
use Illuminate\Http\Request;

class visitavistasController extends Controller
{
    //cliente post
    public function index() {
        $actividades = Post::all();
        return view('index.actividades', compact('actividades'));
    }
    public function verPublicacionCliente($request) {
        $actividad = Post::find($request);
        return view('index.ver_actividad', compact('actividad'));
    }
    //cliente informativos
    public function indexinfo() {
        $informativos = informativo::all();
        return view('index.informativos', compact('informativos'));
    }
    public function verInfoCliente($request) {
        $informativo = informativo::find($request);
        return view('index.ver_informativos', compact('informativo'));
    }


}
