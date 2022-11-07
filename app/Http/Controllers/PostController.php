<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('AuthDirectora', ['only' => 'index']);
    // }
  //cliente
    public function index() {
        $actividades = Post::all();
        return view('index.actividades', compact('actividades'));
    }
    public function verPublicacionCliente($request) {
        $actividad = Post::find($request);
        return view('index.ver_actividad', compact('actividad'));
    }
    
    //directora
    public function verPublicacion($request) {
        $actividad = Post::find($request);
        return view('directora.posteos.VerPublicacion', compact('actividad'));
    }
   
    public function ModificarPubli($request) {
        $actividad = Post::find($request);
        return view('directora.posteos.ModificarPubli', compact('actividad'));
    }
    public function eliminarPubli($request) {
        $actividad = Post::find($request);
        $actividad->delete();
        $actividades = Post::all();
        return view('directora.posteos.VerPost', compact('actividades'));
    }
    
    
    public function verPost() {
        $actividades = Post::all();
        return view('directora.posteos.VerPost', compact('actividades'));
    }

    public function create(){
        return view('directora.posteos.createpost');
    }

    
    public function update(Request $request, $actividad) {
        $actividad = Post::find($actividad);
        $actividad->titulo =$request->input('titulo');
        $actividad->descripcion= $request->input('descripcion');
        $actividad->save();
        return view('directora.posteos.VerPublicacion', compact('actividad'));
    }


    // public function store(Request $request){
    //      $this->validate($request,[
    //         'titulo' => 'required|max:255',
    //         'descripcion' => 'required',
    //         'imagen' => 'required'
    //      ]);

    //      Post::create([
    //         'titulo' => $request->titulo,
    //         'descripcion' => $request->descripcion,
    //         'imagen' => $request->imagen,
    //         'user_id' => auth()->user()->id,
    //      ]);
    //      return redirect()->route('home', auth()->user()->username);
    // }
}
