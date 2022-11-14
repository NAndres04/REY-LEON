@extends('home')

@section('titulodirectora')
      
@endsection    

@section('contenidodirectora')
<div class="w-full h-full bg-grey-lightest" style="padding-top: 4rem;">
    <div class="container mx-auto py-8 ">
        <div class=" max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <div class="flex items-center border-b border-gray-200 dark:border-gray-700  justify-between px-6 py-3">
                <p tabindex="0" class="font-medium leading-tight text-xl mt-0 mb-2 text-dark">Curso</p>
            </div>
            <div class="px-3 pt-3 overflow-x-auto"> 
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-black bg-gray-100">
                            <tr>
                            <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Nombre</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Jornada</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left"></div>
                                </th>
                            </tr>
                        </thead>
                        
                        <tbody class="text-sm divide-y">
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">NT1A</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-left">Mañana</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-center"><button class="px-1 py-1 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-500 hover:text-white focus:outline-none "><a href="/ver_alumnos_nt1a">Gestionar Curso</button></a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">NT2A</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-left">Mañana</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-center"><button class="px-1 py-1 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-500 hover:text-white focus:outline-none "><a href="/ver_alumnos_nt2a">Gestionar Curso</button></a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">NT1B</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-left">Tarde</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-center"><button class="px-1 py-1 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-500 hover:text-white focus:outline-none "><a href="/ver_alumnos_nt1b">Gestionar Curso</button></a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">NT2B</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-left">Tarde</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-center"><button class="px-1 py-1 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-500 hover:text-white focus:outline-none "><a href="/ver_alumnos_nt2b">Gestionar Curso</button></a></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
