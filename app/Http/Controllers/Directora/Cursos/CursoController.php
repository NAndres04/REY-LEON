<?php

namespace App\Http\Controllers\Directora\Cursos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\Alumno;


class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::all();
        return view('directora.cursos.ver_cursos', compact('cursos')); 
    }

    public function obtenerAlumnoNT1A(){
        $alumnos = Alumno::where('id_curso', '3')->get();
        return view('directora.cursos.ver_alumnos_nt1a', compact('alumnos')); 
    }

    public function obtenerAlumnoNT2A(){
        $alumnos = Alumno::where('id_curso', '4')->get();
        return view('directora.cursos.ver_alumnos_nt2a', compact('alumnos')); 
    }

    public function obtenerAlumnoNT1B(){
        $alumnos = Alumno::where('id_curso', '5')->get();
        return view('directora.cursos.ver_alumnos_nt1b', compact('alumnos')); 
    }

    public function obtenerAlumnoNT2B(){
        $alumnos = Alumno::where('id_curso', '6')->get();
        return view('directora.cursos.ver_alumnos_nt2b', compact('alumnos')); 
    }


    
}
