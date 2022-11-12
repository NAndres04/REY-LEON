@extends('home')
<!--- Titulo de la vista --->
@section('titulodirectora')
@endsection

<!--- Contenido del frame --->
@section('contenidodirectora')
<!--- Tamaño del div principal realizado con solo 2 columnos dentro de la pagina --->
    <div class="grid grid-cols-2">
        <!--- Configuracion del div --->
        <div class="w-full  p-8">
            <!--- Titulo --->
            <h1 class=" text-2xl font-bold">Administrar publicacion</h1>
            <div class="mb-4 mt-6">
                <!--- Configuracion y rescate para el div para el titulo --->
                <label class="block text-gray-700 text-sm font-semibold mb-2">
                    Titulo
                </label>
                <label class="block text-gray-700 text-sm font-semibold mb-2">
                    <!--- Rescate del titulo de la actividad seleccionada --->
                    <span>{{ $actividad->titulo }}</span>
                </label>
            </div>
            <!--- Configuracion y rescate para el div para el descripcion --->
            <div class="mb-6 mt-6">
                <label class="block text-gray-700 text-sm font-semibold mb-2" htmlFor="password">
                    Descripcion
                </label>
                <label class="block text-gray-700 text-sm font-semibold mb-2">
                    <!--- Rescate de la descripcion de la actividad ingresada --->
                    <span>{{ $actividad->descripcion }}</span>
                </label>
            </div>
            <!--- Formulario para al terminarlo enviar los datos para moder modificar el titulo y descripcion de una actividad --->
            <form action="{{ route('posts.ModificarPubli', [$actividad->id]) }}" method="get" novalidate>
                <div class="flex mt-3">
                    @csrf
                    <button type="submit"
                        class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Editar
                        publicación</button>
                </div>
            </form>
            <!--- Formulario para al terminarlo eliminar una actividad --->
            <form action="{{ route('posts.eliminarPubli', [$actividad->id]) }}" method="post" novalidate>
                @csrf
                <!--- configuracion y llamado al metodo para eliminar una actividad --->
                <div class="flex mt-3">
                    @method('delete')
                    <button type="submit"
                        class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Eliminar
                        publicación</button>
                </div>
            </form>
                @csrf
                <!--- Boton para volver al menu de actividades principal --->
                <div class="flex mt-3">
                    @method('delete')
                    <a href="/posts/verpost"
                        class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600 text-center">Volver al menu</a>
                </div>
        </div>
        <!-- Segundo div para el carousel -->
        <div id="default-carousel" class="relative w-full  p-8" data-carousel="static">
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
            <!-- En caso que una foto considere mas de una se utilizara el carousel para ver las diferentes fotos -->
            @if ($cantidad >= 1)
                <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96 w-full">
                    <!-- A travez de un foreach se realiza erl recorido de la garia de fotos -->
                    @foreach ($actividad->galeria as $foto)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <!-- Se ingresa cada foto recorrida dentro del carousel -->
                            <img src="<?php echo $foto; ?>"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="...">
                        </div>
                    @endforeach
                </div>
                <!-- Botones y configuracion para el carousel -->
                <button type="button"
                    class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <!-- Configuracion y estilo para boton antenrior -->
                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <!-- Botones y configuracion para el carousel -->
                <button type="button"
                    class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <!-- Configuracion y estilo para boton siguiente -->
                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            @endif
            <!-- En caso de que solo se encuentre una imagene n la galeria se imprimira solo esta sin carousel -->
            @if ($cantidad == 1)
                <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96 w-full">
                     <!-- Se rescata la foto -->
                    <img src="<?php echo $actividad->imagen; ?>" />
                </div>
            @endif
        </div>
        
        <!--- Script para realizar la configuracion del carousel --->
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    @endsection
