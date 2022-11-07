
@extends('home')

@section('titulodirectora')
     
@endsection    

@section('contenidodirectora')

<div class="py-6 " >
    @foreach($actividades as $actividad) 
    <form action="{{route('posts.verPublicacion',[$actividad->id])}}" method="get" novalidate>
        @csrf
    <span>{{ $actividad->titulo }}</span>
    
    <img src="<?php echo $actividad->imagen ?>" />
    <span>{{ $actividad->descripcion }}</span>
    <button type="submit" class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Ver publicación</button>
    </form>
   @endforeach

   
</div>

@endsection 
