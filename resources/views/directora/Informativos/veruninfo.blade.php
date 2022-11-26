@extends('home')

@section('titulodirectora')
     
@endsection    

@section('contenidodirectora')
{{ $informativo->titulo }}

<br>
{{ $informativo->descripcion }}

<form action="{{ route('info.modificar', [$informativo->id]) }}" method="get" novalidate>
    <div class="flex mt-3">
        @csrf
        <button type="submit"
            class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Editar
            informativo</button>
    </div>
</form>

<form action="{{ route('info.eliminar', [$informativo->id]) }}" method="post" novalidate>
    @csrf
    <!--- configuracion y llamado al metodo para eliminar una actividad --->
    <div class="flex mt-3">
        @method('delete')
        <button type="submit"
            class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Eliminar
            publicación</button>
    </div>
</form>
<div class="flex mt-3">
<a href="/informativos"
class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600 text-center">Volver atrás</a>
</div>
@endsection    