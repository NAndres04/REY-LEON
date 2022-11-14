<?php

namespace App\Http\Controllers\Directora\Usuario;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UsuarioController extends Controller
{
    public function index(Request $request){
        $buscador = $request['buscador'] ?? "";
        if($buscador != ""){
            $usuarios = User::where('rut', 'LIKE', "%$buscador%")->orwhere('nombre', 'LIKE', "%$buscador%")->get();
        } else {
            $usuarios = User::all();
        }
        $data = compact('usuarios','buscador');
        return view('directora.usuarios.ver_usuario')->with($data);   
    }

    public function store(Request $request){
        $this->validate($request,[
            'rut' => 'required|cl_rut|unique:users',
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

    public function show(User $usuarios)
    {
        return view('directora.usuarios.info_usuario', compact('usuarios'));
    }

    public function edit(User $usuarios)
    {
        $usuarios->rut;
        $usuarios->nombre;
        $usuarios->ap_paterno;
        $usuarios->ap_materno;
        $usuarios->fecha_nac;
        $usuarios->fono;
        $usuarios->direccion;
        $usuarios->nro_casa;
        $usuarios->email;
        $usuarios->rol;
        return view('directora.usuarios.edit_usuario', [
            'usuarios' => $usuarios
        ]);
    }

    public function update(Request $request, User $usuarios)
    {
        $usuarios->update($request->all());
        return view('directora.usuarios.info_usuario', compact('usuarios'));
    }
}
