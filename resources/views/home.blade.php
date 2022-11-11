<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('index/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
   <!-- abajo se encuentra el script para app.js para dropzone-->
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   
    <title>KingLions Calama - @yield('titulodirectora')</title>
    @livewireStyles

</head>

<body>
    <div class="h-screen bg-gray-50">
        <header>
            <div class="relative z-20 border-b bg-amber-300">
                <div class="px-8 md:px-12 lg:container lg:mx-auto lg:px-6 lg:py-4">
                    <div class="flex items-center justify-between">
                        <div class="relative z-20">
                            <a href="#">
                                <h1 class="font-bold uppercase"><img src="{{ asset('img/reyleon.png') }}"
                                        alt="Logo Jardin Rey Leon" class="w-24 inline">King Lions SchooL</h1>
                            </a>
                        </div>

                        <div class="flex items-center justify-end border-l lg:border-l-0">
                            <input type="checkbox" name="hamburger" id="hamburger" class="peer" hidden>
                            <label for="hamburger"
                                class="peer-checked:hamburger block relative z-20 p-6 -mr-6 cursor-pointer lg:hidden">
                                <div aria-hidden="true"
                                    class="m-auto h-0.5 w-6 rounded bg-black transition duration-300"></div>
                                <div aria-hidden="true"
                                    class="m-auto mt-2 h-0.5 w-6 rounded bg-black transition duration-300"></div>
                            </label>

                            <div
                                class="peer-checked:translate-x-0 fixed inset-0 w-[calc(100%-4.5rem)] translate-x-[-100%] bg-amber-300 border-r shadow-xl transition duration-300 lg:border-r-0 lg:w-auto lg:static lg:shadow-none lg:translate-x-0">
                                <div class="flex flex-col h-full justify-between lg:items-center lg:flex-row mt-1">
                                    <ul
                                        class="px-6 pt-32 text-black space-y-8 md:px-12 lg:space-y-0 lg:flex lg:space-x-12 lg:pt-0">
                                        <li>
                                            <a href="/matricula_apoderado"
                                                class="group relative before:absolute before:inset-x-0 before:bottom-0 before:h-2">
                                                <span class="relative group-hover:text-amber-800">Matrícula</span>
                                            </a>
                                        </li>

                                        <div class="relative inline-block text-left">
                                            <div>
                                                <button type="button"
                                                    class="inline-flex justify-center w-full rounded-md text-black focus:outline-none"
                                                    id="menu-button" aria-expanded="true" aria-haspopup="true">
                                                    <a>Administrar</a> 
                                                    <!-- Heroicon name: solid/chevron-down -->
                                                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div Id="SubMenu"
                                                class="origin-top-right hidden absolute mt-2 w-36 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-20"
                                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button"
                                                tabindex="-1">
                                                <div class="py-1" role="none">
                                                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                                    <a href="{{ route('posts.create') }}"
                                                    class="text-black block px-4 py-2 text-sm hover:bg-amber-300"
                                                    role="menuitem" tabindex="-1" id="menu-item-0">Actividades</a>
                                                <a href="{{ route('posts.ver') }}"
                                                    class="text-black block px-4 py-2 text-sm hover:bg-amber-300"
                                                    role="menuitem" tabindex="-1" id="menu-item-1">Ver actividades</a>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="relative inline-block text-left">
                                            <div>
                                                <button type="button"
                                                    class="inline-flex justify-center w-full rounded-md text-black focus:outline-none"
                                                    id="menu-button" aria-expanded="true" aria-haspopup="true">
                                                    <a href="/ver_cursos">Cursos</a> 
                                                    <!-- Heroicon name: solid/chevron-down -->
                                                </button>
                                            </div>
                                        </div>
                                        <li>
                                        <div class="relative inline-block text-left">
                                            <div>
                                                <button type="button"
                                                    class="inline-flex justify-center w-full rounded-md text-black focus:outline-none"
                                                    id="menu-button-dir" aria-expanded="true" aria-haspopup="true">
                                                    Gestión
                                                    <!-- Heroicon name: solid/chevron-down -->
                                                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div Id="SubMenuDir"
                                                class="origin-top-right hidden absolute mt-2 w-36 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-20"
                                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button-dir"
                                                tabindex="-1">
                                                <div class="py-1" role="none">
                                                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" --> 
                                                    <a href="/ver_usuario"
                                                        class="text-black block px-4 py-2 text-sm hover:bg-amber-300"
                                                        role="menuitem" tabindex="-1" id="menu-item-1">Gestión de Educadoras</a>
                                                    <a href="#"
                                                        class="text-black block px-4 py-2 text-sm hover:bg-amber-300"
                                                        role="menuitem" tabindex="-1" id="menu-item-1">Gestión de Asistencia</a>
                                                    <a href="{{ route('enviarcorreo.index') }}"
                                                        class="text-black block px-4 py-2 text-sm hover:bg-amber-300"
                                                        role="menuitem" tabindex="-1" id="menu-item-1">Gestión de correo</a>
                                                    <a href="#"
                                                        class="text-black block px-4 py-2 text-sm hover:bg-amber-300"
                                                        role="menuitem" tabindex="-1" id="menu-item-1">Gestión de Reunión</a>
                                                </div>
                                            </div>
                                        </div>
                                        </li>                    
                                            <div class="border-t py-8 px-6 md:px-12 md:py-16 lg:border-t-0 lg:border-l lg:py-0 lg:pr-0 lg:pl-6">
                                                <span
                                                    class="px-6 py-3 rounded-full bg-gradient-to-r from-amber-500 to-amber-600 text-center text-white">
                                                    {{ Auth::user()->nombre }} {{ Auth::user()->ap_paterno }}
                                                </span>                            
                                            </div>
                                            <div class="border-t py-8 px-6 md:px-12 md:py-16 lg:border-t-0 lg:border-l lg:py-0 lg:pr-0 lg:pl-6">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                <span
                                                    class="px-6 py-3 rounded-full bg-gradient-to-r from-amber-500 to-amber-600 text-center text-white">
                                                    Cerrar sesión
                                                </span>
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                                </form>                                                                          
                                            </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="top-bar"></div>
        <main class="bg-slate-50">
            <div class="container mx-auto">
                <h2 class="font-black text-center text-5xl h-7">
                    @yield('titulodirectora')
                </h2>
                @yield('contenidodirectora')
        </main>

        <footer class="text-center lg:text-left bg-amber-300 text-amber-800">
            <div class="mx-6 py-0 text-center md:text-left">
                <div class="grid grid-1 md:grid-cols-2 lg:grid-cols-4 gap-1">
                    <div class="">
                        <p>
                            <img class="h-max inline m-16 mt-0 " src="{{ asset('img/reyleon.png') }}"
                                alt="Logo Jardin Rey Leon">
                        </p>
                    </div>
                    <div class="mt-20">
                        <h6
                            class="uppercase font-semibold mb-4 flex justify-center md:justify-start position: absolute;">
                            Soporte
                        </h6>
                        <p class="mb-4">
                            <a href="#!" class="text-amber-800">¿Problemas? Contáctanos aquí</a>
                        </p>
                        <p class="mb-4">
                            <a href="#!" class="text-amber-800">Envíanos un correo</a>
                        </p>
                        <p class="mb-4">
                            <a href="#!" class="text-amber-800">Nuestro número telefónico</a>
                        </p>
                    </div>
                    <div class="mt-20">
                        <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                            Comunicación
                        </h6>
                        <p class="mb-4">
                            <a href="#!" class="text-amber-800">Contáctanos</a>
                        </p>
                        <p class="mb-4">
                            <a href="#!" class="text-amber-800">Servicios</a>
                        </p>
                    </div>
                    <div class="mt-20">
                        <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                            CONTACTO
                        </h6>
                        <p class="flex items-center justify-center md:justify-start mb-4">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home"
                                class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z">
                                </path>
                            </svg>
                            Aníbal Pinto 1698, DE ANTOFAGASTA, CALAMA.
                        </p>
                        <p class="flex items-center justify-center md:justify-start mb-4">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope"
                                class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                </path>
                            </svg>
                            Thelionskingschool@gmail.com
                        </p>
                        <p class="flex items-center justify-center md:justify-start mb-4">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone"
                                class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                                </path>
                            </svg>
                            + 56 2 312712
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-center p-6 bg-amber-800">
                <span class="text-amber-300">© 2022 Copyright:</span>
                <a class="text-amber-300 font-semibold">The king lions</a>
            </div>
        </footer>

    </div>
    @livewireScripts
</body>
<script>
    const boton = document.querySelector('#menu-button');
    const botonSub = document.querySelector('#SubMenu');

    boton.addEventListener('click', () => {
        botonSub.classList.toggle('hidden')
    })

    const botontwo = document.querySelector('#menu-button-dir');
    const botonSubtwo = document.querySelector('#SubMenuDir');

    botontwo.addEventListener('click', () => {
        botonSubtwo.classList.toggle('hidden')
    })
    
</script>

</html>
