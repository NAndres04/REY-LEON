@extends('home')

@section('titulodirectora')
@endsection    

@section('contenidodirectora')
<div class="w-full h-full bg-grey-lightest" style="padding-top: 4rem;">
    <div class="container mx-auto py-8 ">
        <div class=" max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <div class="flex items-center border-b border-gray-200 dark:border-gray-700  justify-between px-6 py-3">
                <p tabindex="0" class="font-medium leading-tight text-xl mt-0 mb-2 text-dark">Curso NT1B</p>
                <p tabindex="0" class="bg-amber-500 text-white active:bg-amber-600 font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">Fecha:<?=date('d/m/Y');?></p>
            </div>
            <div class="px-3 pt-3 overflow-x-auto"> 
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-black bg-gray-100">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">#</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Nombre</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Rut</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Presente</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Ausente</div>
                                </th>
                            </tr>
                        </thead>
                        @foreach ( $alumnos as $alumnos )
                        <tbody class="text-sm divide-y">
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{ $loop->iteration  }}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{ $alumnos->nombre }} {{ $alumnos->ap_paterno }} {{ $alumnos->ap_materno }}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{ $alumnos->rut }}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <label class="inline-flex">
                                        <input type="radio" class=" text-green-500" name="radio">
                                    </label>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <label class="inline-flex">
                                        <input type="radio" class=" text-red-500" name="radio">
                                    </label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    <div class="flex items-center border-b border-gray-200 dark:border-gray-700  justify-between px-6 py-3">
                        <p tabindex="0" class="font-medium leading-tight text-xl mt-0 mb-2 text-dark"></p>
                        <button tabindex="0" class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">Guardar</button>            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
