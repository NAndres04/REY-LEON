@extends('layouts.app')
<!--- Titulo de la vista --->
@section('titulo')
@endsection
<!--- Contenido del frame --->
@section('contenido')
    <div class="py-20 bg-gray-50 divide-x-4 px-3 order-t border-b">
        <div class="container mx-auto px-6 md:px-12 xl:px-32">
            <div class="mb-16 text-center">
                <!--- Titulo encabezado directora --->
                <h2 class="mb-4 text-center text-2xl text-gray-900 font-bold md:text-4xl">Administración del establecimiento
                </h2>
                <!--- Descrpcion encabezado directora --->
                <p class="text-gray-600 lg:w-8/12 lg:mx-auto">Dentro del establecimiento existen tres tipos de personal administrativo, el cual está encargado de las tareas fundamentales del establecimiento King lions.</p>
            </div>
            <div class="space-y-4 text-center">
                <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-48 md:h-64 lg:w-64 lg:h-80"
                    src="https://res.cloudinary.com/du7xx1dwx/image/upload/v1669759564/samples/profile-42914_960_720_oixzvb.webp" alt="man" loading="lazy"
                    width="1000" height="667">
                <div>
                    <!--- Descrpcion directora --->
                    <h4 class="text-2xl">Daniela Iriarte</h4>
                    <!--- Descrpcion Cargo --->
                    <span class="block text-sm text-gray-500">Directora del establecimiento</span>
                </div>
            </div>
        </div>
    </div>


    <div class="mb-16">
        <!-- Inicio informacion educadores -->
        <dh-component>
            <div class="container flex justify-center mx-auto pt-16">
                <div>
                    <!-- Titulo de educadoras -->
                    <p class="text-gray-500 text-lg text-center font-normal pb-3">Educadoras del establecimiento</p>
                    <!--- Descrpcion primer grupo --->
                    <h1 class="xl:text-4xl text-3xl text-center text-gray-800 font-extrabold pb-6 sm:w-4/6 w-5/6 mx-auto">
                        Grupo primer nivel de transición</h1>
                </div>
            </div>
            <div class="px-52 pt-10 border-b">
                <div class="container mx-auto">
                    <!--- Configuracion del primer dormulario --->
                    <div role="list" aria-label="Behind the scenes People "
                        class="lg:flex md:flex sm:flex items-center xl:justify-between flex-wrap md:justify-around sm:justify-around lg:justify-around ml-8">
                        <!--- Configuracion del div --->
                        <div role="listitem"
                            class="xl:w-1/6 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                            <div class="rounded overflow-hidden shadow-md bg-white">
                                <div class="absolute -mt-20 w-full flex justify-center">
                                    <div class="h-32 w-32">
                                        <img src="https://res.cloudinary.com/du7xx1dwx/image/upload/v1669759564/samples/profile-42914_960_720_oixzvb.webp"
                                            alt="Display Picture of Andres Berlin" role="img"
                                            class="rounded-full object-cover h-full w-full shadow-md" />
                                    </div>
                                </div>
                                <div class="px-6 mt-16">
                                    <!--- Nombre personal primer grupo --->
                                    <h1 class="font-bold text-3xl text-center mb-1">Jennibeth Berna</h1>
                                    <!--- Cargo personal primer grupo --->
                                    <p class="text-gray-800 text-sm text-center mb-10">Educadora de párvulo</p>
                                </div>
                            </div>
                        </div>
                        <!--- Configuracion del div --->
                        <div role="listitem"
                            class="xl:w-1/6 lg:mx-3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                            <div class="rounded overflow-hidden shadow-md bg-white">
                                <div class="absolute -mt-20 w-full flex justify-center">
                                    <div class="h-32 w-32">
                                        <img src="https://res.cloudinary.com/du7xx1dwx/image/upload/v1669759564/samples/profile-42914_960_720_oixzvb.webp"
                                            alt="Display Picture of Silene Tokyo" role="img"
                                            class="rounded-full object-cover h-full w-full shadow-md" />
                                    </div>
                                </div>
                                <div class="px-6 mt-16">
                                    <!--- Nombre personal primer grupo --->
                                    <h1 class="font-bold text-3xl text-center mb-1">Tamara Araya</h1>
                                    <!--- Cargo personal primer grupo --->
                                    <p class="text-gray-800 text-sm text-center mb-10">Educadora de párvulo</p>
                                </div>
                            </div>
                        </div>
                        <!--- Configuracion del div --->
                        <div role="listitem"
                            class="xl:w-1/6 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                            <div class="rounded overflow-hidden shadow-md bg-white">
                                <div class="absolute -mt-20 w-full flex justify-center">
                                    <div class="h-32 w-32">
                                        <img src="https://res.cloudinary.com/du7xx1dwx/image/upload/v1669759564/samples/profile-42914_960_720_oixzvb.webp"
                                            alt="Display Picture of Johnson Stone" role="img"
                                            class="rounded-full object-cover h-full w-full shadow-md" />
                                    </div>
                                </div>
                                <div class="px-6 mt-16">
                                    <!--- Nombre personal primer grupo --->
                                    <h1 class="font-bold text-3xl text-center mb-1">Angélica Carvajal</h1>
                                    <!--- Cargo personal primer grupo --->
                                    <p class="text-gray-800 text-sm text-center mb-10">Asistente de párvulo</p>
                                </div>
                            </div>
                        </div>
                        <!--- Configuracion del div --->
                        <div role="listitem"
                            class="xl:w-1/6 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                            <div class="rounded overflow-hidden shadow-md bg-white">
                                <div class="absolute -mt-20 w-full flex justify-center">
                                    <div class="h-32 w-32">
                                        <img src="https://res.cloudinary.com/du7xx1dwx/image/upload/v1669759564/samples/profile-42914_960_720_oixzvb.webp"
                                            alt="Display Picture of Dean Jones" role="img"
                                            class="rounded-full object-cover h-full w-full shadow-md" />
                                    </div>
                                </div>
                                <div class="px-6 mt-16">
                                    <!--- Nombre personal primer grupo --->
                                    <h1 class="font-bold text-3xl text-center mb-1">Paulina Gómez</h1>
                                    <!--- Cargo personal primer grupo --->
                                    <p class="text-gray-800 text-sm text-center mb-10">Asistente de párvulo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mb-16">
                <!-- Inicio informacion educadores -->
                <dh-component>
                    <div class="container flex justify-center mx-auto pt-16">
                        <div>
                            <!-- Titulo informacion educadores -->
                            <h1
                                class="xl:text-4xl text-3xl text-center text-gray-800 font-extrabold pb-6 sm:w-4/6 w-5/6 mx-auto">
                                Grupo segundo nivel de transición</h1>
                        </div>
                    </div>
                    <div class="px-52 pt-10">
                        <div class="container mx-auto">
                            <div role="list" aria-label="Behind the scenes People"
                                class="lg:flex md:flex sm:flex items-center xl:justify-between flex-wrap md:justify-around sm:justify-around lg:justify-around">
                                <!--- Configuracion del div --->
                                <div role="listitem"
                                    class="xl:w-1/6 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                                    <div class="rounded overflow-hidden shadow-md bg-white">
                                        <div class="absolute -mt-20 w-full flex justify-center">
                                            <div class="h-32 w-32">
                                                <img src="https://res.cloudinary.com/du7xx1dwx/image/upload/v1669759564/samples/profile-42914_960_720_oixzvb.webp"
                                                    alt="Display Picture of Andres Berlin" role="img"
                                                    class="rounded-full object-cover h-full w-full shadow-md" />
                                            </div>
                                        </div>
                                        <div class="px-6 mt-16">
                                            <!--- Nombre personal primer grupo --->
                                            <h1 class="font-bold text-3xl text-center mb-1">Fabiola Araya</h1>
                                            <!--- Cargo personal primer grupo --->
                                            <p class="text-gray-800 text-sm text-center mb-10">Educadora de párvulo</p>
                                        </div>
                                    </div>
                                </div>
                                <!--- Configuracion del div --->
                                <div role="listitem"
                                    class="xl:w-1/6 lg:mx-3 sm:w-3/1 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                                    <div class="rounded overflow-hidden shadow-md bg-white">
                                        <div class="absolute -mt-20 w-full flex justify-center">
                                            <div class="h-32 w-32">
                                                <img src="https://res.cloudinary.com/du7xx1dwx/image/upload/v1669759564/samples/profile-42914_960_720_oixzvb.webp"
                                                    alt="Display Picture of Silene Tokyo" role="img"
                                                    class="rounded-full object-cover h-full w-full shadow-md" />
                                            </div>
                                        </div>
                                        <div class="px-6 mt-16">
                                            <!--- Nombre personal primer grupo --->
                                            <h1 class="font-bold text-3xl text-center mb-1">Daniela Iriarte</h1>
                                            <!--- Cargo personal primer grupo --->
                                            <p class="text-gray-800 text-sm text-center mb-10">Educadora de párvulo</p>
                                        </div>
                                    </div>
                                </div>
                                <!--- Configuracion del div --->
                                <div role="listitem"
                                    class="xl:w-1/6 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                                    <div class="rounded overflow-hidden shadow-md bg-white">
                                        <div class="absolute -mt-20 w-full flex justify-center">
                                            <div class="h-32 w-32">
                                                <img src="https://res.cloudinary.com/du7xx1dwx/image/upload/v1669759564/samples/profile-42914_960_720_oixzvb.webp"
                                                    alt="Display Picture of Johnson Stone" role="img"
                                                    class="rounded-full object-cover h-full w-full shadow-md" />
                                            </div>
                                        </div>
                                        <div class="px-6 mt-16">
                                            <!--- Nombre personal primer grupo --->
                                            <h1 class="font-bold text-3xl text-center mb-1">Karina Moraga</h1>
                                            <!--- Cargo personal primer grupo --->
                                            <p class="text-gray-800 text-sm text-center mb-10">Asistente de párvulo</p>
                                        </div>
                                    </div>
                                </div>
                                <!--- Configuracion del div --->
                                <div role="listitem"
                                    class="xl:w-1/6 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                                    <div class="rounded overflow-hidden shadow-md bg-white">
                                        <div class="absolute -mt-20 w-full flex justify-center">
                                            <div class="h-32 w-32">
                                                <img src="https://res.cloudinary.com/du7xx1dwx/image/upload/v1669759564/samples/profile-42914_960_720_oixzvb.webp"
                                                    alt="Display Picture of Dean Jones" role="img"
                                                    class="rounded-full object-cover h-full w-full shadow-md" />
                                            </div>
                                        </div>
                                        <div class="px-6 mt-16">
                                            <!--- Nombre personal primer grupo --->
                                            <h1 class="font-bold text-3xl text-center mb-1">Vianka Castro</h1>
                                            <!--- Cargo personal primer grupo --->
                                            <p class="text-gray-800 text-sm text-center mb-10">Asistente de párvulo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        @endsection
