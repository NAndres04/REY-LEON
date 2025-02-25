@extends('home')
<!--- Titulo de la vista --->
@section('titulodirectora')
@endsection

<!--- Contenido del frame --->
@section('contenidodirectora')

    <!-- Gogole Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap"
        rel="stylesheet" />

    <!-- Page Main -->
    <main class="flex flex-col items-center justify-center">
        <!-- Hero -->
        <section
            class="flex flex-wrap items-center -mx-3 font-sans px-4 w-full lg:max-w-screen-lg sm:max-w-screen-sm md:max-w-screen-md pb-20">
            <!-- Column-1 -->
            <div class="px-3 w-full lg:w-2/5 mt-8">
                <div class="mx-auto max-w-lg text-center lg:mx-0 lg:max-w-md lg:text-left">
                    <h2 class="mb-4 text-3xl font-bold  lg:text-5xl">
                        Actividad
                        <span class="text-5xl text-amber-600 leading-relaxeds">{{ $actividad->titulo }}
                        </span>
                    </h2>
                    <p class="visible mx-0 mt-3 text-sm leading-relaxed text-left text-slate-400">
                        Establecimiento subvencionado The lions kions, calama.
                    </p>
                </div>
            </div>
            <!-- Parallax Background -->
            <section class="flex-col w-full h-[500px] bg-cover bg-fixed bg-center flex justify-center items-center ">
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
                    @if ($cantidad >= 2)
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
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7">
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
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                                <span class="hidden">Next</span>
                            </span>
                        </button>
                    @endif
                    <!-- En caso de que solo se encuentre una imagene n la galeria se imprimira solo esta sin carousel -->
                    @if ($cantidad == 1)
                        <div id="default-carousel" class="relative w-full  p-8" data-carousel="static">
                            <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96 w-full">
                                <!-- Se rescata la foto -->
                                <img src="<?php echo $actividad->imagen; ?>"
                                    class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                    alt="..." />
                            </div>
                        </div>
                    @endif
                </div>
            </section>
            <!-- Descripcion del establecimiento -->
            <section class="space-y-8 w-full">
                <h1 class="text-4xl text-center">Informacion de la actividad</h1>
                <p>
                    <label class="block text-gray-700 text-sm font-semibold mb-2">
                        <!--- Rescate de la descripcion de la actividad ingresada --->
                        <span>{{ $actividad->descripcion }}</span>
                    </label>
                </p>
                <!--- Formulario para al terminarlo enviar los datos para moder modificar el titulo y descripcion de una actividad --->
                <div class="flex space-x-3">
                    <form action="{{ route('posts.ModificarPubli', [$actividad->id]) }}" method="get" novalidate>
                        <div class="flex mt-3">
                            @csrf
                            <button type="submit"
                                class="rounded-2xl border px-3 py-1 text-xs font-semibold bg-white text-black w-96 border-amber-500 group hover:bg-amber-500 
                        rounded-xss
                        transition-all duration-200">Editar
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
                                class="rounded-2xl border px-3 py-1 text-xs font-semibold bg-white text-black w-96 border-amber-500 group hover:bg-amber-500 
                        rounded-xss
                        transition-all duration-200">Eliminar
                                publicación</button>
                        </div>
                    </form>
                    @csrf
                    <!--- Boton para volver al menu de actividades principal --->
                    <div class="flex mt-3">
                        <a href="/posts/verpost"
                            class="rounded-2xl border px-3 py-1 text-xs font-semibold bg-white text-black w-72 border-amber-500 group hover:bg-amber-500 
                        rounded-xss
                        transition-all duration-200 text-center">Volver
                            al menu</a>
                    </div>
                </div>
            </section>
        </section>
    </main>
@endsection

<style>
    section {
        font-family: "Poppins", sans-serif;
    }
</style>

<!--- Script para llamado a stylo de tailwind --->
<script src="https://cdn.tailwindcss.com"></script>
<!--- Script para realizar la configuracion del carousel --->
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
