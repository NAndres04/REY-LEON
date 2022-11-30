@extends('layouts.app')

@section('titulo')
@endsection

@section('contenido')
    <!-- Gogole Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap"
        rel="stylesheet" />

    <style>
        section {
            font-family: "Poppins", sans-serif;
        }
    </style>

    <!-- Page Main -->
    <main class="flex flex-col items-center justify-center">
        <!-- Hero -->
        <section
            class="flex flex-wrap items-center -mx-3 font-sans px-4 w-full lg:max-w-screen-lg sm:max-w-screen-sm md:max-w-screen-md pb-20">
            <!-- Column-1 -->
            <div class="px-3 w-full lg:w-2/5">
                <div class="mx-auto mb-8 max-w-lg text-center lg:mx-0 lg:max-w-md lg:text-left">
                    <h2 class="mb-4 text-3xl font-bold  lg:text-5xl">
                        Educación y aprendizaje de
                        <span class="text-5xl text-amber-600 leading-relaxeds">Calidad
                        </span>
                        Educativa
                    </h2>
                    <p class="visible mx-0 mt-3 mb-0 text-sm leading-relaxed text-left text-slate-400">
                        Establecimiento subvencionado King Lions, Calama.
                    </p>
                </div>
            </div>

            <!-- Parallax Background -->
            <section class="flex-col w-full h-[500px] bg-cover bg-fixed bg-center flex justify-center items-center "
                style="
        background-image: url(https://res.cloudinary.com/du7xx1dwx/image/upload/v1669757740/samples/7_jhbvyp.jpg);
">
                </span>
            </section>

            <!-- Descripcion del establecimiento -->
            <section class="p-20 space-y-8">
                <h1 class="text-4xl text-center my-20">Información del establecimiento</h1>

                <p>
                    “KING LION´S SCHOOL” es una escuela de párvulo de carácter particular-subvencionado, fue reconocido por
                    el ministerio de educación bajo el decreto: 261 en el año 1997, el establecimiento se encuentra ubicada
                    en Aníbal pinto #1698, lleva 23 años de servicios al servicio de la comunidad.
                    Su matrícula es de 150 párvulos; distribuido en 1º nivel de transición con 70 alumnos, y 2º nivel de
                    transición mayor con 80 alumnos.
                </p>
                <p>
                    Su sostenedora es la señorita: NANCY FLORES VIZCARRA.
                    Su directora es la señorita: DANIELA IRIARTE MOLINA.
                    El establecimiento se basa en entregar un servicio educativo de calidad a niños de la Provincia “El
                    Loa”, a través de un mejoramiento permanente de la gestión educativa mediante el currículo integral;
                    para ello cuentan con un personal idóneo centrado en la diversidad de los niños y la cultura de alta
                    expectativa, en su desarrollo equilibrado y armónico en sus ámbitos de aprendizaje, formando a
                    individuos íntegro, capaz de enfrentar su mundo y a sí mismo. Cuentan con un establecimiento equipado de
                    recursos humanos, didácticos y pedagógicos, potenciando las experiencias significativas de enseñanza,
                    mejorando los niveles de logro institucionales y los resultados de calidad para todos los actores de la
                    comunidad escolar.

                </p>
            </section>
    </main>
@endsection
