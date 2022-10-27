<?php

namespace App\Http\Controllers\Directora\Usuario;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UsuarioController extends Controller
{
    public function index(){
        $usuarios = User::all();
        return view('directora.usuarios.ver_usuario', compact('usuarios'));
        
    }
   

    public function store(Request $request){
        $this->validate($request,[
            'rut' => 'required|max:10',
            'nombre' => 'required|max:30|min:3',
            'ap_paterno' => 'required|max:10|min:3',
            'ap_materno' => 'required|max:10|min:3',
            'fecha_nac' => 'required',
            'fono' => 'required|max:9|min:8',
            'rol' => 'required',
            'direccion' => 'required|max:30|min:3',
            'nro_casa' => 'required|max:10|min:3',
            'email' => 'required|max:60|unique:users|string',
            'password' => 'required|min:8|confirmed|string',

      ] );

        $user = User::create([
            'rut' => $request->rut,
            'nombre' => $request->nombre,
            'ap_paterno' => $request->ap_paterno,
            'ap_materno' => $request->ap_materno,
            'fecha_nac' => $request->fecha_nac,
            'fono' => $request->fono,
            'direccion' => $request->direccion,
            'nro_casa' => $request->nro_casa,
            'rol' => $request->rol,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        $usuarios = User::all();
        return view('directora.usuarios.ver_usuario', compact('usuarios'));
        
    }
}
