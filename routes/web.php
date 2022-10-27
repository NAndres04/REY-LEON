<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\EducadoraController;
use App\Http\Controllers\Directora\Cursos\CursoController;
use App\Http\Controllers\Directora\Usuario\UsuarioController;
use App\Http\Controllers\Directora\Matricula\AlumnoController;
use App\Http\Controllers\Directora\Matricula\ApoderadoController;


/*
|--------------------------------------------------------------------------
| Routes: Home Page
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('index.principal');
});

Route::get('/trabajadores', function () {
    return view('index.trabajadores');
});
Route::get('/actividades', function () {
    return view('index.actividades');
});

Route::get('/colegio', function () {
    return view('index.colegio');
});
Route::get('/objetivos', function () {
    return view('index.objetivos');
});
Route::get('/ubicacion', function () {
    return view('index.ubicacion');
});
Route::get('/informacion', function () {
    return view('index.informacion');
});

Auth::routes();
/*
Route::get('/agregar_usuario', function () {return view('directora.usuarios.agregar_usuario');});
Route::post('/usuario', [UsuarioController::class, 'store'])->name('usuario.store');*/
/*
|--------------------------------------------------------------------------
| Routes: Directora
|--------------------------------------------------------------------------
*/
Route::group(["middleware" => 'AuthDirectora'], function() {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    //ruta para configuracion de dropzone y formulario ya que form no funciona sin una ruta
    Route::post('/imagenes', [ImagenController::class, 'store'])->name('imagenes.store');
   //controlador para añadir los posteos
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

    
   

    //Route: Gestión de Usuarios(Educadora)
            //Route: Vista principal de los usuarios(Educadora)
            Route::get('/ver_usuario', [UsuarioController::class, 'index'])->name('alumno.index');
            //Route: Vista del formulario del usuario(Educadora)
                                Route::get('/agregar_usuario', function () {return view('directora.usuarios.agregar_usuario');});
            //Route: Insert Usuario(Educadora)
                         Route::post('usuario', [UsuarioController::class, 'store'])->name('usuario.store');
            //Route: Update Usuario(Educadora)
            //Route: Delete Usuario(Educadora)

        //Route: Matrícula
            //Route: Matrícula Apoderado
            Route::get('/matricula_apoderado', function () {return view('directora.matricula.matricula_apoderado'); });
            //Route: Matrícula Alumno
            Route::get('/matricula_alumno', [AlumnoController::class, 'index'])->name('alumno.index');

            //Route: Insert Apoderado
            Route::post('apoderado', [ApoderadoController::class, 'store'])->name('apoderado.store');
            //Route: Update Apoderado
            //Route: Delete Apoderado

            //Route: Insert Alumno
            Route::post('alumno', [AlumnoController::class, 'store'])->name('alumno.store');
            //Route: Update Alumno
            //Route: Delete Alumno

        //Route: Cursos
            //Route: Vista principal de los cursos;
            Route::get('/ver_cursos', [CursoController::class, 'index'])->name('curso.index');
            //Route: Vista de cursos
            Route::get('/ver_alumnos', [CursoController::class, 'obtenerAlumno'])->name('curso.obtenerAlumno');
    
 });

 /*
|--------------------------------------------------------------------------
| Routes: Educadora
|--------------------------------------------------------------------------
*/
 Route::group(["middleware" => 'AuthEducadora'], function() {

    Route::get('/inicio', [EducadoraController::class, 'index'])->name('inicio');

 });

