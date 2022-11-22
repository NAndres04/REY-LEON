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
        $apoderados = Apoderado::all();
        $alumnos = Alumno::all();
        return view('directora.matricula.matricula_alumno', compact('apoderados','cursos'));
        
    }
    public function store(Request $request){
        $this->validate($request,[
            'id_apoderado' => 'required|max:10|min:1',
            'rut' => 'required|cl_rut|unique:alumnos|',
            'nombre' => 'required|max:30|min:3',
            'ap_paterno' => 'required|max:10|min:3',
            'ap_materno' => 'required|max:10|min:3',
            'fecha_nac' => 'required',
            'ciudad_nac' => 'required|max:30|min:3',
            'nacionalidad' => 'required|max:30|min:3',
            'domicilio' => 'required|max:30|min:3',
            'edad' => 'required|max:30|min:1',
            'nombre_emergencia' => 'required|max:50|min:3',
            'fono_emergencia' => 'required|max:50|min:3',
            'discapacidad' => 'required|max:50|min:3',
            'id_curso' => 'required|numeric|min:1',

      ] );

        $alumno = Alumno::create([
            'id_apoderado' => $request ->id_apoderado,
            'rut' => $request->rut,
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
        return view('directora.directora');
    }

    public function show(Alumno $alumnos)
    {
        return view('directora.alumnos.info_alumno', compact('alumnos'));
    }


    public function edit(Alumno $alumnos)
    {
        $cursos = Curso::all();
        $alumnos->rut;
        $alumnos->nombre;
        $alumnos->ap_paterno;
        $alumnos->ap_materno;
        $alumnos->fecha_nac;
        $alumnos->ciudad_nac;
        $alumnos->nacionalidad;
        $alumnos->domicilio;
        $alumnos->edad;
        $alumnos->nombre_emergencia;
        $alumnos->fono_emergencia;
        $alumnos->discapacidad;
        return view('directora.alumnos.edit_alumno', [
            'cursos' => $cursos,
            'alumnos' => $alumnos
        ]);
    }

    public function update(Request $request, Alumno $alumnos)
    {
        $alumnos->update($request->all());
        return view('directora.alumnos.info_alumno', compact('alumnos'));
    }

}
