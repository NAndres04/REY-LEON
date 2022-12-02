@extends('home')

@section('titulodirectora')
      
@endsection    

@section('contenidodirectora')
<div class="w-full bg-grey-lightest">
    <div class="container mx-auto py-8 flex">
        <div class="w-5/6 lg:w-1/2 mx-auto bg-white rounded shadow">
            <div class="py-4 px-8 text-black text-3xl border-b border-grey-lighter font-bold ">Información Personal</div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Rut</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $apoderados->rut }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p class="focus:outline-none text-xs text-gray-500">Nombre Completo</p>
                        <p class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $apoderados->nombre }} {{ $apoderados->ap_paterno }} {{ $apoderados->ap_materno }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Teléfono</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $apoderados->fono }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Correo Electrónico</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $apoderados->correo }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Situación Laboral</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $apoderados->situacion_laboral }}</p>
                    </div>
                </div>
                 <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Tipo de Salud</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:text-black mt-1">{{ $apoderados->tipo_salud }}</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="flex items-center border-b border-gray-200 dark:border-gray-700  justify-between px-6 py-3">
            <p tabindex="0" class="focus:outline-none text-2xl leading-tight text-gray-800 dark:text-white "><a href=""><button class="bg-red-500 text-white active:bg-red-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">Eliminar</button></a></p>
            <a href="{{ route ('apoderado.edit', $apoderados) }}"><button class="bg-green-500 text-white active:bg-green-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">Modificar</button></a>
        </div>  
        </div>
    </div>
</div>
@endsection 
