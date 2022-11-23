<?php

namespace App\Http\Controllers;

use App\Models\informativo;
use Illuminate\Http\Request;

class InformativoController extends Controller
{
    public function index() {
        $informativo = informativo::all();
        return view('index.actividades', compact('actividades'));
    }
    public function create() {
        return view('directora.Informativos.crearinfo');
    }

    public function store(Request $request) {
        $this->validate($request,[
            'titulo' => 'required',
            'descripcion' => 'required|max:30|min:3',
     ] );

        $informativo = informativo::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
        ]);
        
        $informativos = informativo::all();
        return view('directora.Informativos.verinfo', compact('informativos'));
        
    }
}
