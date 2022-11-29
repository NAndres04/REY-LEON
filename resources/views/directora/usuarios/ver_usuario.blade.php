@extends('home')

@section('titulodirectora')
      
@endsection    

@section('contenidodirectora')
<div class="w-full h-full bg-grey-lightest">
    <div class="container mx-auto py-8 ">
        <div class=" max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <div class="flex items-center border-b border-gray-200 dark:border-gray-700  justify-between px-6 py-3">
                <p tabindex="0" class="font-medium leading-tight text-xl mt-0 mb-2 text-dark">Personal Educativo</p>
                <button class="bg-green-500 text-white active:bg-green-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                <a href="/agregar_usuario">Agregar Usuario</a> 
                </button>
            </div>
            <form class="m-3 flex">
                <input type="search" name="buscador" value="{{$buscador}}" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Ingrese el Rut o Nombre Completo del Usuario.">
                <button type="submit" class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg aria-hidden="true" class="mr-2 -ml-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>Buscar
                </button>
            </form>
            <div class="px-3 pt-3 overflow-x-auto"> 
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-black bg-gray-100">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">#</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Rut</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Nombre</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Cargo</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left"></div>
                                </th>
                            </tr>
                        </thead>
                        @if(count($usuarios)<=0)
                        <tbody class="text-sm divide-y">
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">No hay resultados</div>
                                    </div>
                                </td>
                        </tbody>
                        @else
                        @foreach ( $usuarios as $users )
                        <tbody class="text-sm divide-y">
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{ $loop->iteration }}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{ $users->rut }}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-left">{{ $users->nombre }} {{ $users->ap_paterno }} {{ $users->ap_materno }}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{ $users->roles() }}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-center"><button class="px-1 py-1 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-500 hover:text-white focus:outline-none "><a href="{{ route ('usuario.show', $users) }}">Ver Información</button></a></div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                        @endif
                    </table>
                    {{ $usuarios->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 

