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
            'rut' => 'required|cl_rut|unique:alumnos|unique:users|unique:apoderados',
            'nombre' => 'required|max:30|min:3',
            'ap_paterno' => 'required|max:10|min:3',
            'ap_materno' => 'required|max:10|min:3',
            'fecha_nac' => 'required',
            'nacionalidad' => 'required|in: Brasilera,Boliviana,Argentina,Chilena,Colombiana,Cubana,Dominicana,Ecuatoriana,Española,EstadoUnidense,Haitiana,Mexicana,Panameña,Paraguaya,Peruana,Uruguaya,Venezolana',
            'domicilio' => 'required|max:30|min:3',
            'edad' => 'required|in: 2,3,4,5,6,7',
            'nombre_emergencia' => 'required|max:50|min:3',
            'fono_emergencia' => 'required|max:50|min:3',
            'id_curso' => 'required|numeric|min:1',

      ] );

        $alumno = Alumno::create([
            'id_apoderado' => $request ->id_apoderado,
            'rut' => $request->rut,
            'nombre' => $request->nombre,
            'ap_paterno' => $request->ap_paterno,
            'ap_materno' => $request->ap_materno,
            'fecha_nac' => $request->fecha_nac,
            'nacionalidad' => $request->nacionalidad,
            'domicilio' => $request->domicilio,
            'edad' => $request->edad,
            'nombre_emergencia' => $request->nombre_emergencia,
            'fono_emergencia' => $request->fono_emergencia,
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
        $alumnos->nacionalidad;
        $alumnos->domicilio;
        $alumnos->edad;
        $alumnos->nombre_emergencia;
        $alumnos->fono_emergencia;
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
