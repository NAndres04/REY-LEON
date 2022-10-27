<?php

namespace App\Http\Controllers\Directora\Matricula;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Apoderado;
use App\Models\Curso;


class ApoderadoController extends Controller
{
    public function store(Request $request){
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
        $cursos = Curso::all();
        return view('directora.matricula.matricula_alumno', compact('cursos'));
    }
}
