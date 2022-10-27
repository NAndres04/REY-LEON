@extends('layouts.app')

@section('titulo')
@endsection

@section('contenido')
    <main class="py-12 md:px-20 sm:px-14 px-6">
        <!--Formulario encabezado con contenido ded ubicacion-->
        <div class="sm:flex items-center shadow-md">
            <div class="md:px-10 sm:px-5">
                <!--Titulo de la ubicacion-->
                <h1 class="text-gray-800 font-bold text-2xl my-2">Ubicación del establecimiento</h1>
                <!--Descripcion de la ubicacion parrafo 1-->
                <p class="text-gray-700 mb-2 md:mb-6">La ubicación del establecimiento está instalada cerca de la cercanía
                    del centro de la ciudad de calama, donde normalmente transcurre mucha gente.</p>
                <!--Descripcion de la ubicacion parrafo 2-->
                <p class="text-gray-700 mb-2 md:mb-6">Los horarios de atención dentro del establecimiento son durante la
                    mañana de 9:00 a 13:00 hrs o en la
                    tarde de 13:30 a 17:30 hrs.</p>
                <!--Pie de pagina dedl primer formulario-->
                <div class="flex justify-between mb-2">
                    <span class="font-thin text-sm">Ubicación del establecimiento Aníbal Pinto #1698, Calama</span>
                </div>
            </div>
            <div>
                <!--Ubicacion de google maps-->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1303.5823856512168!2d-68.93109923008228!3d-22.463335459996024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96ac09b62eedfa25%3A0xff91e11b4796bb86!2sAlvarez%20Gahona%20Guillermo!5e0!3m2!1ses!2scl!4v1664665759719!5m2!1ses!2scl"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!--Formulario apartado de abajo-->
        <div class="mt-40 md:flex space-x-6">
            <div>
                <!--Imagen calendario-->
                <img class="lg:h-80 md:h-48 w-full" src="{{ asset('img/Calendario.jpg') }}" alt="">
                <div>
                    <!--Descripcion de los horarios de atencion-->
                    <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">¡Diferentes horarios para los pupilos!</h1>
                    <p class="text-gray-700 mb-2">Existen dos tipos de niveles, el primer Nivel de Transición (Pre-Kínder) 5
                        años, el segundo Nivel de Transición (Kínder) 6 años.
                    </p>
                </div>
            </div>
            <div>
                <!--Imagen iglesia-->
                <img class="lg:h-80 md:h-48 w-full" src="{{ asset('img/Iglesia.jpg') }}" alt="">
                <div>
                    <!--Descripcion del sector cercano al establecimiento-->
                    <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">¡Ubicación en un buen sector!</h1>
                    <p class="text-gray-700 mb-2">El establecimiento está ubicado en el centro de la ciudad, lo cual le
                        permite una mayor accesibilidad y locomoción.
                    </p>
                </div>
            </div>
            <div>
                <!--Imagen actividades-->
                <img class="lg:h-80 md:h-48 w-full" src="{{ asset('img/Actividades.jpg') }}" alt="">
                <div>
                    <!--Descripcion de las actividades recreativas-->
                    <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">¡Actividades recreativas!</h1>
                    <p class="text-gray-700 mb-2">Se realizan todo tipo de actividades dentro del establecimiento, sobre
                        todo actividades culturales de chile, mejorando así el desarrollo y la inclusión al país.
                    </p>
                </div>
            </div>
        </div>
    </main>
@endsection
