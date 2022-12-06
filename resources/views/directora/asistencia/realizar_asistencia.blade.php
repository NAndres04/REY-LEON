@extends('home')

@section('titulodirectora')
@endsection    

@section('contenidodirectora')
<div class="w-full h-full bg-grey-lightest">
    <div class="container mx-auto py-8 ">
        <div class=" max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <div class="flex items-center border-b border-gray-200 dark:border-gray-700  justify-between px-6 py-3">
            <p class="font-medium leading-tight text-xl mt-0 mb-2 text-dark">Registrar Asistencia</p>
            <form action="{{route('asistencia.store')}}" method="POST">
                @csrf
                <input class="bg-amber-500 text-white active:bg-amber-600 font-bold uppercase text-xs px-4 py-2 rounded outline-none" id="fecha" name="fecha" value="<?=date('Y/m/d');?>" readonly/>
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
                                    <div class="font-semibold text-left">Estado</div>
                                </th>
                            </tr>
                        </thead>
                        @foreach ( $alumnos as $alumno )
                        <tbody class="text-sm divide-y">
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{ $loop->iteration  }}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{ $alumno->nombre }} {{ $alumno->ap_paterno }} {{ $alumno->ap_materno }}</div>
                                        <input type="hidden" value="{{ $alumno->id }}" name="id_alumno[]" id="id_alumno"><input type="hidden" value="{{ $alumno->id_curso }}" name="id_curso" id="id_curso">
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{ $alumno->rut }}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <select name="estado[]" id="estado">
                                            <option value="0">Presente</option>
                                            <option value="1">Ausente</option>
                                        </select>
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
                    </form>
                </div>
                 {{ $alumnos->links() }}
            </div>
        </div>
    </div>
</div>
@endsection 

