
@extends('home')

@section('titulodirectora')
     
@endsection    

@section('contenidodirectora')



<div class="py-6 " >
    <form action="{{route('posts.ModificarPubli',[$actividad->id])}}" method="get" novalidate>
        @csrf
    <span>{{ $actividad->titulo }}</span>
    <span>{{ $actividad->descripcion }}</span>
    @foreach ($actividad->galeria as $foto)
        <img src="<?php echo $foto ?>" />
    @endforeach
    
        <button type="submit" class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Editar publicación</button>
        
    </form>
    <form action="{{route('posts.eliminarPubli',[$actividad->id])}}" method="post" novalidate>
        @csrf
        @method('delete')
    <button type="submit" class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Eliminar publicación</button>
    </form>
         
  
</div>

@endsection 