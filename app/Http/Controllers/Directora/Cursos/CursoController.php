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

    public function obtenerAlumno(){
        $alumnos = Alumno::where('id_curso', 'id')->get();
        return view('directora.cursos.ver_alumnos', compact('alumnos')); 
    }

    
}
