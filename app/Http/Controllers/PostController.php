<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('AuthDirectora', ['only' => 'index']);
    }
    public function create(){
        return view('directora.posteos.createpost');
    }
    public function store(Request $request){
         $this->validate($request,[
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'imagen' => 'required'
         ]);

         Post::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'imagen' => $request->imagen,
            'user_id' => auth()->user()->id,
         ]);
         return redirect()->route('home', auth()->user()->username);
    }
}
