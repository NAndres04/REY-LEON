
@extends('layouts.app')

@section('titulo')
     
@endsection    

@section('contenido')



<div class="py-6 " >
   
    <span>{{ $actividad->titulo }}</span>
    <span>{{ $actividad->descripcion }}</span>
    @foreach ($actividad->galeria as $foto)
        <img src="<?php echo $foto ?>" />
    @endforeach
   
         
  
</div>

@endsection 