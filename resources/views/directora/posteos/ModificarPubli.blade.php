@extends('home')
<!--- Titulo de la vista --->
@section('titulodirectora')
@endsection

<!--- Contenido del frame --->
@section('contenidodirectora')
    <!--- Formulario para enviar los datos una vez procesados al llamado de base de datos--->
    <form action="{{ route('posts.updatePubli', [$actividad->id]) }}" method="post" novalidate>
        @csrf
        @method('put')
        <!--- COnfiguracion del div--->
        <div class="grid grid-cols-2">
            <div class="w-full  p-8">
                <h1 class=" text-2xl font-bold">Administrar publicación</h1>
                <!--- Div para modificar el titulo--->
                <div class="mb-4 mt-6">
                    <!--- Titulo --->
                    <label class="block text-gray-700 text-sm font-semibold mb-2" htmlFor="password">
                        Título
                    </label>
                    <!--- Input para rescatar el titulo de una actividad y modificarla --->
                    <input type="text"
                        class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
    appearance-none @error('titulo') border-red-500 @enderror"
                        value="{{ $actividad->titulo }}" id="titulo" name="titulo" placeholder="Ingrese el titulo" />
                    <!--- Mensaje de error --->
                    @error('titulo')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>
                <!--- Div para modificar la descripcion --->
                <div class="mb-6 mt-6">
                    <!--- Titulo descripcion --->
                    <label class="block text-gray-700 text-sm font-semibold mb-2" htmlFor="password">
                        Descripcion
                    </label>
                    <!--- Input para rescatar la descripcion de una actividad y modificarla --->
                    <input type="text"
                        class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                        appearance-none @error('descripcion') border-red-500 @enderror"
                        value="{{ $actividad->descripcion }}" id="descripcion" name="descripcion"
                        placeholder="Ingrese la descripcion" />
                    <!--- Mensaje de error --->
                    @error('descripcion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>
                <!--- Boton para redirigir al apartado volver al menu --->
                <div class="flex mt-3">
                    <a href="/posts/verpost"
                        class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600 text-center">Volver
                        al menu</a>
                </div>
                <!--- Boton para redirigir al apartado modificar --->
                <div class="flex mt-3">
                    <button type="submit"
                        class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Modificar
                    </button>
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
                @if ($cantidad >= 2)
                    <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96 w-full">
                        <!-- A travez de un foreach se realiza erl recorido de la garia de fotos -->
                        @foreach ($actividad->galeria as $foto)
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <span
                                    class="top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First
                                    Slide</span>
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            <span class="hidden">Next</span>
                        </span>
                    </button>
                @endif
                <!-- En caso de que solo se encuentre una imagene n la galeria se imprimira solo esta sin carousel -->
                @if ($cantidad == 1)
                    <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96 w-full">
                        <img src="<?php echo $actividad->imagen; ?>" />
                    </div>
                @endif
            </div>
    </form>
    <!--- Script para realizar la configuracion del carousel --->
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
@endsection
