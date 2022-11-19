@extends('layouts.app')
<!--- Titulo de la vista --->
@section('titulo')
@endsection

@section('contenido')
    <div class="px-3 lg:w-2/5">
        <div class="mx-auto mb-8 max-w-lg text-center lg:mx-0 lg:max-w-md lg:text-left">
            <h2 class="mb-4 text-3xl font-bold  lg:text-5xl mt-6">
                Administración de
                <span class="text-5xl text-amber-600 leading-relaxeds">Actividades
            </h2>
        </div>
    </div>



    <!--- Inicio de formulario con un valor de 12 columnas para el dic de contenido --->
    <div class="grid grid-cols-4">
        <!--- Foreach para recorredi de todas las actividades --->
        @foreach ($actividades as $actividad)
            <!-- Se crea un contador para verificar cuantas fotos tiene una imagen -->
            <?php
            $cantidad = 0;
            ?>
            <!-- Se revisa la galeria de fotos seleccionadas a travez de foreach en el cual se acumulan cada vez que se encuentre una foto -->
            @foreach ($actividad->galeria as $foto)
                <?php
                $cantidad = $cantidad + 1;
                ?>
            @endforeach
            <!--- Formulario para enviar la la id de una actividad en especifico al seleccionarla a travez de un botton, ademas se configura con un espaciado de 4 columnos dentro del div --->
            <form action="{{ route('posts.verPubli', [$actividad->id]) }}" method="get" novalidate class="col-span-1">
                @csrf
                <!--- LLamado a diseño para formularios personalizados (Dentro del for each, ya que se debe personalizar en cada actividad ingresada) --->
                <script src="https://cdn.tailwindcss.com"></script>
                <div class="mx-auto w-full">
                    <a
                        class="relative inline-block w-full transform transition-transform duration-300 ease-in-out hover:-translate-y-2">
                        <div class="rounded-lg p-4 mt-5">
                            <div class="relative flex h-52 justify-center overflow-hidden rounded-lg">
                                <div class="py-6">
                                    <!--- Rescate de foto princpial de una galeria --->
                                    <form action="{{ route('posts.verPublicacion', [$actividad->id]) }}" method="get"
                                        novalidate>
                                        @csrf
                                        <img src="<?php echo $actividad->imagen; ?>" />
                                    </form>
                                    <div class="absolute bottom-0 left-5 mb-3 flex">
                                        <p class="flex items-center font-medium text-white shadow-sm">
                                            <i class="fa fa-camera mr-2 text-xl text-white"></i>
                                            {{ $cantidad }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-1">
                                <div class="text-black absolute">
                                    <div class="inline-block h-3 border-l-2 border-amber-600 mr-2"></div><span
                                        class="text-xl">{{ $actividad->titulo }}</span>
                                </div>
                            </div>
                            <!--- Botton para enviar el Id de una actividad seleccionada a una nueva ventana --->
                            <button type="submit"
                                class="border bg-white text-black font-bold py-2 px-4 w-full rounded mt-16  border-amber-500 group hover:bg-amber-500 
                                rounded-xss
                                transition-all duration-200">Ver
                                más</button>
                            <div class="flex items-center justify-between py-4">
                                <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Calama, Segunda región</h2>
                                <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
                            </div>
                        </div>
                    </a>
                </div>
            </form>
        @endforeach
    </div>
@endsection



<!--- Script para realizar la configuracion del carousel --->
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>


