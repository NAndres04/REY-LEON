<?php

use App\Models\Post;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\posteosController;
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
//ver todas las publicaciones
Route::get('/actividades', [PostController::class, 'index'])->name('posts.index');
//Ver una publicacion en particular cliente
Route::get('/actividades/{id}', [PostController::class, 'verPublicacionCliente'])->name('posts.verPubli');

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
    //ruta para ver todos los posteos realizados
    Route::get('/posts/verpost', [PostController::class, 'verPost'])->name('posts.ver');
   //Ruta para ver el posteo seleccionado
   Route::get('/posts/{id}', [PostController::class, 'verPublicacion'])->name('posts.verPublicacion');

   Route::delete('/posts/{id}/eliminar', [PostController::class, 'eliminarPubli'])->name('posts.eliminarPubli');
   Route::get('/posts/{id}/modificar', [PostController::class, 'ModificarPubli'])->name('posts.ModificarPubli');
   Route::put('/posts/{id}/modificando', [PostController::class, 'update'])->name('posts.updatePubli');

   //ROUTE:CORREOS
    //ruta para escoger los cursos

   //ruta para formulario
   Route::get('/enviarcorreo', [MailController::class,'index'])->name('enviarcorreo.index');
   //ruta para enviar el correo
   Route::post('/enviarcorreo/enviando', [MailController::class,'store'])->name('enviarcorreo.store');

  //Route: Gestión de Usuarios(Educadora)
            //Route: Vista principal de los usuarios(Educadora)
            Route::get('/ver_usuario', [UsuarioController::class, 'index'])->name('usuario.index');
            //Route: Vista para ver la información de cada usuarios
            Route::get('/info_usuario/{usuarios}', [UsuarioController::class, 'show'])->name('usuario.show');
            //Route: Vista del formulario del usuario(Educadora)
             Route::get('/agregar_usuario', function () {return view('directora.usuarios.agregar_usuario');});
            //Route: Insert Usuario(Educadora)
             Route::post('usuario', [UsuarioController::class, 'store'])->name('usuario.store');
            //Route: Update Usuario(Educadora)
            Route::get('edit_usuario/{usuarios}', [UsuarioController::class, 'edit'])->name('usuario.edit');
            Route::put('edit_usuario/{usuarios}', [UsuarioController::class, 'update'])->name('usuario.update');
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
            Route::get('edit_alumno/{alumnos}', [AlumnoController::class, 'edit'])->name('alumno.edit');
            Route::put('edit_alumno/{alumnos}', [AlumnoController::class, 'update'])->name('alumno.update');
            //Route: Delete Alumno

             //Route: Cursos
            //Route: Vista principal de los cursos;
            Route::get('/ver_cursos', [CursoController::class, 'index'])->name('curso.index');
            //Route: Vista del curso NT1A
            Route::get('/ver_alumnos_nt1a', [CursoController::class, 'obtenerAlumnoNT1A'])->name('curso.obtenerAlumnoNT1A');
            //Route: Vista del curso NT2A
            Route::get('/ver_alumnos_nt2a', [CursoController::class, 'obtenerAlumnoNT2A'])->name('curso.obtenerAlumnoNT2A');
            //Route: Vista del curso NT1B
            Route::get('/ver_alumnos_nt1b', [CursoController::class, 'obtenerAlumnoNT1B'])->name('curso.obtenerAlumnoNT1B');
            //Route: Vista del curso NT2B
            Route::get('/ver_alumnos_nt2b', [CursoController::class, 'obtenerAlumnoNT2B'])->name('curso.obtenerAlumnoNT2B');
            //Route: Vista para ver la información de cada alumnos
            Route::get('/info_alumno/{alumnos}', [AlumnoController::class, 'show'])->name('alumno.show');
    
 });

 /*
|--------------------------------------------------------------------------
| Routes: Educadora
|--------------------------------------------------------------------------
*/
 Route::group(["middleware" => 'AuthEducadora'], function() {

    Route::get('/inicio', [EducadoraController::class, 'index'])->name('inicio');

 });

