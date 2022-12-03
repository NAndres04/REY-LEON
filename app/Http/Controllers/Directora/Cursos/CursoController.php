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

    public function obtenerAlumnos(Request $request, $curso_id){
        $buscador = $request->get('buscador');
        $alumnos = Alumno::where('id_curso','=', $curso_id)
                            ->where('rut', 'like','%'.$buscador.'%')
                            ->paginate(10);
        $data = compact('alumnos','buscador');
        return view('directora.cursos.ver_alumnos')->with($data);
    }


}
