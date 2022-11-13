@extends('home')

@section('titulodirectora')
      
@endsection    

@section('contenidodirectora')
<div class="py-32 h-screen ">
      <!-- crear   -->
     
        <div class="mt-4">
            Seleccione los cursos a enviar correo:
            <table>
            @foreach ($cursos as $curso)
            <form action="{{route('enviarcorreo.index' , [$curso->id])}}" method="get" novalidate>
                @csrf
            <tr>
                <td> <label>
                   
                    <span>{{ $curso->nombre }}</span>
                    <input type="checkbox">
                </label><br></td></tr>
            @endforeach
            </table>
        </div>
        <!-- fin crear publicacion -->

        <div class="mt-8">
            <button type="submit" class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Publicar actividad</button>
        </div>
        </form>
</div>
@endsection   
     
