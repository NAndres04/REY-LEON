@extends('home')

@section('titulodirectora')
      
@endsection    

@section('contenidodirectora')

<div class="w-full bg-grey-lightest">
    <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg flex justify-center">
        <div class="flex items-center justify-center py-8 px-4">
            <div class="relative py-8 px-8 md:px-16 bg-white dark:border-gray-700 shadow-md rounded border border-gray-400">
                <div class="w-full flex justify-center text-green-400 mb-4">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/centre_aligned_short-svg1.svg" alt="icon"/>  
                </div>
                <h1 tabindex="0" class="focus:outline-none text-center text-gray-800 dark:text-black font-lg font-bold tracking-normal leading-tight mb-4">Apoderado Registrado Correctamente</h1>
                <p tabindex="0" class="focus:outline-none mb-5 text-sm text-gray-600 dark:text-gray-700 text-center font-normal">Por favor, Haz clic en el botón siguiente para continuar con la matrícula.</p>
                <div class="flex items-center justify-center w-full">
                <a href="/matricula_alumno"><button class="focus:ring-2 focus:ring-offset-2 focus:ring-green-600 focus:outline-none transition duration-150 ease-in-out hover:bg-green-600 bg-green-700 rounded text-white px-4 sm:px-8 py-2 text-xs sm:text-sm">Siguiente</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 