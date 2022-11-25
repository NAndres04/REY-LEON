@extends('layouts.app')
<!--- Titulo de la vista --->
@section('titulo')
@endsection


<!--- Contenido del frame --->
@section('contenido')
{{ $informativo->titulo }}

<br>
{{ $informativo->descripcion }}


<div class="flex mt-3">
<a href="/información"
class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600 text-center">Volver atrás</a>
</div>
@endsection