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

    public function obtenerAlumnoNT1A(Request $request){
         $buscador = $request->get('buscador');
         $alumnos = Alumno::where('id_curso','=','3')
                            ->where('rut', 'like','%'.$buscador.'%')
                            ->paginate(10);
        $data = compact('alumnos','buscador');
        return view('directora.cursos.ver_alumnos_nt1a')->with($data);
        
    }

    public function obtenerAlumnoNT2A(Request $request){
        $buscador = $request->get('buscador');
        $alumnos = Alumno::where('id_curso','=','4')
                            ->where('rut', 'like','%'.$buscador.'%')
                            ->paginate(10);
        $data = compact('alumnos','buscador');
        return view('directora.cursos.ver_alumnos_nt2a')->with($data);; 
    }

    public function obtenerAlumnoNT1B(Request $request){
        $buscador = $request->get('buscador');
        $alumnos = Alumno::where('id_curso','=','5')
                            ->where('rut', 'like','%'.$buscador.'%')
                            ->paginate(10);
        $data = compact('alumnos','buscador');
        return view('directora.cursos.ver_alumnos_nt1b')->with($data);; 
    }

    public function obtenerAlumnoNT2B(Request $request){
        $buscador = $request->get('buscador');
        $alumnos = Alumno::where('id_curso','=','6')
                            ->where('rut', 'like','%'.$buscador.'%')
                            ->paginate(10);
        $data = compact('alumnos','buscador');
        return view('directora.cursos.ver_alumnos_nt2b')->with($data);; 
    }
    
}
