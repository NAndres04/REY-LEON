@extends('layouts.app')
<!--- Titulo de la vista --->
@section('titulo')
<h5 class="text-center text-4xl font-bold mb-16">Actividades del establecimiento</h5>
@endsection

<!--- Contenido del frame --->
@section('contenido')
    <!--- Inicio de formulario con un valor de 12 columnas para el dic de contenido --->
    <div class="grid grid-cols-12 h-screen">
        <!--- Foreach para recorredi de todas las actividades --->
        @foreach ($actividades as $actividad)
            <!--- Formulario para enviar la la id de una actividad en especifico al seleccionarla a travez de un botton, ademas se configura con un espaciado de 4 columnos dentro del div --->
            <form action="{{ route('posts.verPubli', [$actividad->id]) }}" method="get" novalidate class="col-span-4 mr-3">
                @csrf
                <!--- LLamado a diseño para formularios personalizados (Dentro del for each, ya que se debe personalizar en cada actividad ingresada) --->
                <script src="https://cdn.tailwindcss.com"></script>
                <div class="mx-auto w-full">
                    <a
                        class="relative inline-block w-full transform transition-transform duration-300 ease-in-out hover:-translate-y-2">
                        <div class="rounded-lg bg-slate-200 p-4 mt-5">
                            <!--- Rescate de titulo la actividad para el formulario --->
                            <span class="text-lg font-bold">{{ $actividad->titulo }}</span>
                            <div class="relative flex h-52 justify-center overflow-hidden rounded-lg">
                                <div class="py-6">
                                    <form action="{{ route('posts.verPublicacion', [$actividad->id]) }}" method="get">
                                        <!--- Rescate de foto princpial de una galeria --->
                                        <img src="<?php echo $actividad->imagen; ?>" />
                                    </form>
                                </div>
                            </div>
                            <!--- Botton para enviar el Id de una actividad seleccionada a una nueva ventana --->
                            <button type="submit"
                                class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600 mt-4">Ver
                                publicacion</button>
                        </div>
                    </a>
                </div>
            </form>
        @endforeach
    </div>
@endsection

<!--- Script para realizar la configuracion del carousel --->
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
