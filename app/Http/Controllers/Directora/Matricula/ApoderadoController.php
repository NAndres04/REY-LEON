<?php

namespace App\Http\Controllers\Directora\Matricula;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Apoderado;
use App\Models\Curso;


class ApoderadoController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'rut' => 'required|max:10',
            'nombre' => 'required|max:30|min:3',
            'ap_paterno' => 'required|max:10|min:3',
            'ap_materno' => 'required|max:10|min:3',
            'fono' => 'required|max:9|min:8',
            'correo' => 'required|max:60|email|string',
            'profesion_laboral' => 'required|max:30|min:3',
            'situacion_laboral' => 'required|max:30|min:3',
            'grado_estudio' => 'required|max:30|min:1',
            'tipo_salud' => 'required|max:30|min:1',

      ] );

        $apoderado = Apoderado::create([
            'rut' => $request->rut,
            'nombre' => $request->nombre,
            'ap_paterno' => $request->ap_paterno,
            'ap_materno' => $request->ap_materno,
            'fono' => $request->fono,
            'correo' => $request->correo,
            'profesion_laboral' => $request->profesion_laboral,
            'situacion_laboral' => $request->situacion_laboral,
            'grado_estudio' => $request->grado_estudio,
            'tipo_salud' => $request->tipo_salud,
        ]);
        return view('directora.matricula.matricula_apoderado_confirmar');
    }
}
