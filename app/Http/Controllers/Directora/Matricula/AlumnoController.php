<?php

namespace App\Http\Controllers\Directora\Matricula;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Apoderado;

class AlumnoController extends Controller
{
    public function index(){
        $cursos = Curso::all();
        return view('directora.matricula.matricula_alumno');
        
    }
    public function store(Request $request){
        $alumno = Alumno::create([
            'rut_apoderado' => $request ->rut_apoderado,
            'rut' => $request->rut,
            'nro_documento' => $request->nro_documento,
            'nombre' => $request->nombre,
            'ap_paterno' => $request->ap_paterno,
            'ap_materno' => $request->ap_materno,
            'fecha_nac' => $request->fecha_nac,
            'ciudad_nac' => $request->ciudad_nac,
            'nacionalidad' => $request->nacionalidad,
            'domicilio' => $request->domicilio,
            'edad' => $request->edad,
            'nombre_emergencia' => $request->nombre_emergencia,
            'fono_emergencia' => $request->fono_emergencia,
            'discapacidad' => $request->discapacidad,
            'id_curso' => $request->id_curso,
        ]);
        return view('directora.inicio_directora');
    }
}
