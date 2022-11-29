@extends('home')

@section('titulodirectora')
      
@endsection    

@section('contenidodirectora')
<div class="w-full bg-grey-lightest">
    <div class="container mx-auto py-8 flex">
        <div class="w-5/6 lg:w-1/2 mx-auto bg-white rounded shadow">
            <div class="flex items-center border-b border-gray-200 dark:border-gray-700  justify-between px-6 py-3">
            <p class="font-medium leading-tight text-xl mt-0 mb-2 text-dark">Curso: {{ $asistencias->cursos->nombre }}</p>
            <p class="font-medium leading-tight text-xl mt-0 mb-2 text-dark">Fecha: {{ $asistencias->fecha }}</p>
        </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">{{ $asistencias->alumnos->nombre }}</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:dark:text-black mt-1"></p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p class="focus:outline-none text-xs text-gray-500">Nombre Completo</p>
                        <p class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:dark:text-black mt-1"></p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Fecha de Nacimiento</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:dark:text-black mt-1"></p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Teléfono</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:dark:text-black mt-1"></p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Dirección</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:dark:text-black mt-1"></p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Número de Casa</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:dark:text-black mt-1"></p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Tipo de Cuenta</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:dark:text-black mt-1"></p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Correo Electrónico</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:dark:text-black mt-1"></p>
                    </div>
                </div>
            </div>
            <br> 
        </div>
    </div>
</div>
@endsection 
