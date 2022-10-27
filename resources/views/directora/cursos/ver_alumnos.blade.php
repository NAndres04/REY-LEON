@extends('home')

@section('titulodirectora')
      
@endsection    

@section('contenidodirectora')
<div class="h-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-24">
    <div class="relative flex flex-col min-w-0 break-words bg-gray-100 w-full mb-6 shadow-lg rounded ">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">  
                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h1 class="font-semibold text-2xl text-black "></h1>
                </div>            
            </div>
        </div>
        <div class="block w-full overflow-x-auto ">
            <table class="table border-separate items-center bg-transparent w-full ">
                <tbody>
                @foreach ( $alumnos as $alumnos )
                    <tr class="bg-white shadow-2xl">
                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 text-left text-blueGray-700 ">
                            {{ $alumnos->nombre }} {{ $alumnos->ap_paterno }} {{ $alumnos->ap_materno }}
                        </th>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0  whitespace-nowrap p-4 "></td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0  whitespace-nowrap p-4 text-right">
                        <a href=""><button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-amber-500 hover:text-white focus:outline-none ">Ver Curso</button></a>
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