@extends('home')

@section('titulodirectora')
      
@endsection    

@section('contenidodirectora')
<div class="w-full bg-grey-lightest">
    <div class="container mx-auto py-8 flex">
        <div class="w-5/6 lg:w-1/2 mx-auto bg-white rounded shadow">
            <div class="py-4 px-8 text-black text-2xl border-b border-grey-lighter font-bold ">Información Personal</div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Rut</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:dark:text-black mt-1">{{ $usuarios->rut }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p class="focus:outline-none text-xs text-gray-500">Nombre Completo</p>
                        <p class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:dark:text-black mt-1">{{ $usuarios->nombre }} {{ $usuarios->ap_paterno }} {{ $usuarios->ap_materno }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Fecha de Nacimiento</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:dark:text-black mt-1">{{ $usuarios->fecha_nac }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Teléfono</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:dark:text-black mt-1">{{ $usuarios->fono }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Dirección</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:dark:text-black mt-1">{{ $usuarios->direccion }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Número de Casa</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:dark:text-black mt-1">{{ $usuarios->nro_casa }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Tipo de Cuenta</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:dark:text-black mt-1">{{ $usuarios->ROLES() }}</p>
                    </div>
                </div>
                <div>
                    <div class="px-6">
                        <p tabindex="0" class="focus:outline-none text-xs text-gray-500">Correo Electrónico</p>
                        <p tabindex="0" class="focus:outline-none text-sm leading-none text-justify text-gray-800 dark:dark:text-black mt-1">{{ $usuarios->email }}</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="flex items-center border-b border-gray-200 dark:border-gray-700  justify-between px-6 py-3">
            <p tabindex="0" class="focus:outline-none text-2xl leading-tight text-gray-800 dark:text-white "></p>
            <a href="{{ route ('usuario.edit', $usuarios) }}"><button class="bg-green-500 text-white active:bg-green-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">Modificar</button></a>
        </div>  
        </div>
    </div>
</div>
@endsection 
