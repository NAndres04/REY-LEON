@extends('home')

@section('titulodirectora')
      
@endsection    

@section('contenidodirectora')
<div class="h-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-24">
    <div class="border rounded-lg border pb-6 border-gray-200 dark:border-gray-700">
        <div class="flex items-center border-b border-gray-200 dark:border-gray-700  justify-between px-6 py-3">
            <p tabindex="0" class="focus:outline-none text-2xl leading-tight text-gray-800 dark:text-black ">Personal Educativo</p>
            <button class="focus:outline-none focus:ring-2 flex cursor-pointer items-center justify-center px-3 py-2.5 border rounded border-green-500 text-black transition duration-300 hover:bg-green-500 hover:text-white">
                <a href="/agregar_usuario"><p class="focus:outline-none text-1xl md:text-sm leading-none border-green-500 text-black transition duration-300 hover:bg-green-500 hover:text-white ">Agregar Usuario</p></a>
            </button>
        </div>
        <div class="px-6 pt-6 overflow-x-auto"> 
            <table class="table border-separate items-center bg-transparent w-full ">
                <tbody>
                @foreach ( $usuarios as $users )
                    <tr class="bg-white shadow-2xl">
                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 text-left text-blueGray-700 ">
                        {{ $users->nombre }} {{ $users->ap_paterno }} {{ $users->ap_materno }}
                        </th>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0  whitespace-nowrap p-4 "></td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0  whitespace-nowrap p-4 text-right">
                        <button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-amber-500 hover:text-white focus:outline-none "><a href="{{ route ('usuario.show', $users) }}">Ver Información</button></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 

<style>
	.table {
		border-spacing: 0 15px;
	}
</style>
