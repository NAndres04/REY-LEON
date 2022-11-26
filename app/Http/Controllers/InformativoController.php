<?php

namespace App\Http\Controllers;

use App\Models\informativo;
use Illuminate\Http\Request;

class InformativoController extends Controller
{

    public function __construct()
     {
         $this->middleware('auth');
         $this->middleware('AuthDirectora', ['only' => 'index']);
     }
    
    public function create() {
        return view('directora.Informativos.crearinfo');
    }

    public function store(Request $request) {
        $this->validate($request,[
            'titulo' => 'required|min:3',
            'descripcion' => 'required|min:3',
     ] );

        $informativo = informativo::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
        ]);
        
        $informativos = informativo::all();
        return view('directora.Informativos.verinfo', compact('informativos'));
        
    }
    //ver todos los informativos
    public function index() {
        $informativos = informativo::all();
        return view('directora.Informativos.verinfo', compact('informativos'));
    }
    //ver informativo seleccionado
    public function veruno($request) {
        $informativo = informativo::find($request);
        return view('directora.Informativos.veruninfo', compact('informativo'));
    }
    //enviar datos a vista para poder modificar

    public function ModificarInfo($request) {
        $informativo = informativo::find($request);
        return view('directora.Informativos.Modificarinfo', compact('informativo'));
    }
    //modifica los datos y retorna a la vista modificada
    public function update(Request $request, $informativo) {
        $this->validate($request,[
            'titulo' => 'required|min:3',
            'descripcion' => 'required|min:3',
     ] );
        $informativo = informativo::find($informativo);
        $informativo->titulo =$request->input('titulo');
        $informativo->descripcion= $request->input('descripcion');
        $informativo->save();
        return view('directora.Informativos.veruninfo', compact('informativo'));
    }

    public function eliminarInfo($request) {
        $informativo = informativo::find($request);
        $informativo->delete();
        $informativos = informativo::all();
        return view('directora.Informativos.verinfo', compact('informativos'));
    }
}
