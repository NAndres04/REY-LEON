@extends('layouts.app')
<!--- Titulo de la vista --->
@section('titulo')
@endsection
<!--- Contenido del frame --->
@section('contenido')
    <div class="2xl:mx-auto 2xl:container mx-4 py-16">
        <!--- Encabezado del contenido --->
        <div class="w-full relative flex items-center justify-center">
            <img src="https://res.cloudinary.com/du7xx1dwx/image/upload/v1669757765/samples/2_ogbrpr.jpg" alt="dining" class="h-full absolute z-0 hidden xl:block" />
            <img src="https://res.cloudinary.com/du7xx1dwx/image/upload/v1669757747/samples/4_fbv9he.jpg" alt="dining"
                class="w-full h-full absolute z-0 hidden sm:block xl:hidden" />
            <img src="https://res.cloudinary.com/du7xx1dwx/image/upload/v1669757747/samples/4_fbv9he.jpg" alt="dining"
                class="w-full h-full absolute z-0 sm:hidden" />
            <div
                class="bg-gray-800 bg-opacity-80 md:my-16 lg:py-16 py-10 w-full md:mx-24 md:px-12 px-4  flex-col items-center justify-center relative z-10">
                <!--- Titulo del encabezado del contenido --->
                <h1 class="text-4xl font-semibold leading-9 text-white text-center">Objetivos del establecimiento</h1>
                <!--- Descripcion encabezado del contenido --->
                <p class="text-base leading-normal text-center text-white mt-6">
                    Ser un establecimiento Autónomo  de  prestigio y  reconocido por su  excelencia  en  Educación,  que
                    brinda en los  niños  y niñas  una formación  de  alta  calidad,  con  una  mirada  inclusiva, enfocada
                    en  el  currículo  integral,  orientada a “preparar para la vida”, desarrollando en nuestros  alumnos
                    al máximo sus potencialidades valóricas, cognitivas y sociales, preparando para aprender y adquirir las
                    herramientas y destrezas necesarias para enfrentar los futuros desafíos con resiliencia y así contribuir
                    a que ellos y ellas sean una persona plena; en un ambiente afectivo que involucra a la familia como
                    primeros agentes educativos en la formación de los estudiantes, alcanzando un perfil de alumno que
                    cuente con las competencias necesarias para integrarse a la sociedad actual.
                    <br />
                </p>
            </div>
        </div>
    </div>
    <!--- Contenido --->
    <div class="py-16 bg-white">
        <!--- Contenido formulario de mision  --->
        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                <!--- Imagen de la mision del establecimiento --->
                <div class="md:5/12 lg:w-5/12">
                    <img src="https://res.cloudinary.com/du7xx1dwx/image/upload/v1669757730/samples/10_bexlax.jpg"
                        alt="image" loading="lazy" width="" height="">
                </div>
                <!--- Descripcion de la mision del establecimiento --->
                <div class="md:7/12 lg:w-6/12">
                    <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">Misión del establecimiento</h2>
                    <p class="mt-6 text-gray-600">Entregar un servicio educativo de calidad a niños y niñas de la provincia
                        el Loa, en el Primer y Segundo nivel de Transición, con una mirada inclusiva, a través de un
                        mejoramiento continuo de nuestra gestión educativa con una cultura de alta expectativa y el
                        desarrollo del Currículo Integral, abordando las necesidades establecidas por la comunidad y concibe
                        en la formación educativa como un proceso permanente que abarca a la persona en su totalidad, que
                        tiene como propósito promover su formación intelectual y personal mediante experiencias
                        significativas que potencien el desarrollo de competencias y valores, respondiendo a sus
                        características, capacidades, habilidades e intereses, fomentando a un individuo integral, capaz de
                        enfrentar su mundo socialmente y a sí mismo. Para ello contamos con un establecimiento equipado de
                        recursos humanos, tecnológicos y pedagógicos que fortalecen y apoya efectivamente los procesos de
                        enseñanza - aprendizaje, mejorando así los niveles de logro institucionales con resultados de
                        calidad y equidad para nuestros alumnos, en un ambiente armónico, accesibles e equilibrado para
                        todos los actores de la comunidad escolar.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-16 bg-white">
        <!--- Contenido formulario de vision  --->
        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                <!--- Descripcion de la vision del establecimiento --->
                <div class="md:7/12 lg:w-6/12">
                    <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">Visión del establecimiento</h2>
                    <p class="mt-6 text-gray-600">Ser un establecimiento Autónomo de prestigio y reconocido por su
                        excelencia en Educación, que brinda en los niños y niñas una formación de alta calidad, con una
                        mirada inclusiva, enfocada en el currículo integral, orientada a “preparar para la vida”,
                        desarrollando en nuestros alumnos al máximo sus potencialidades valóricas, cognitivas y sociales,
                        preparando para aprender y adquirir las herramientas y destrezas necesarias para enfrentar los
                        futuros desafíos con resiliencia y así contribuir a que ellos y ellas sean una persona plena; en un
                        ambiente afectivo que involucra a la familia como primeros agentes educativos en la formación de los
                        estudiantes, alcanzando un perfil de alumno que cuente con las competencias necesarias para
                        integrarse a la sociedad actual.</p>
                </div>
                <!--- Imagen de la vision del establecimiento --->
                <div class="md:5/12 lg:w-5/12">
                    <img src="https://res.cloudinary.com/du7xx1dwx/image/upload/v1669757762/samples/3_kfuamo.jpg"
                        alt="image" loading="lazy" width="" height="">
                </div>
            </div>
        </div>
    </div>



    <div class='w-full  px-10 py-8  bg-white'>
        <h1 class="text-2xl text-gray-900 font-bold md:text-4xl text-center">Valores del establecimiento</h1>
        <!-- Comienzo valores de la organizacion -->
        <ul class="accordion w-full bg-gray-50 rounded-lg shadow-lg shadow-gray-100 p-14 mt-14">
            <!-- Valores de la organacion-->
            <li class="cursor-pointer my-1">
                <span class="font-bold text-xl tracking-tight text-gray-500 flex flex-row justify-between items-center">
                    <!-- Nombre del valor -->
                    <p>Autonomía</p>
                    <svg class="text-gray-500 mr-1"xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                    </svg>
                </span>
                <!-- Descrpcion del valor -->
                <div class="text-gray-500 text-md p-2">
                    Se refiere a la aplicación de sus propias herramientas conductuales y cognitivas que lo ayuden a
                    desarrollarse como un ser humano pensante y reflexivo de sus acciones y consecuencias respectivas.
                </div>
            </li>
            <li class="cursor-pointer my-1">
                <span class="font-bold text-xl tracking-tight text-gray-500 flex flex-row justify-between items-center">
                    <!-- Nombre del valor -->
                    <p>Honestidad</p>
                    <svg class="text-gray-500 mr-1"xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                    </svg>
                </span>
                <!-- Descrpcion del valor -->
                <div class="text-gray-500 text-md p-2">
                    Se refiere al simple respeto a la verdad, en la relación, compañeros, familia y todo su entorno
                    social.
                </div>
            </li>

            <li class="cursor-pointer my-1">
                <span class="font-bold text-xl tracking-tight text-gray-500 flex flex-row justify-between items-center">
                    <!-- Nombre del valor -->
                    <p>Perseverancia</p>
                    <svg class="text-gray-500 mr-1"xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                    </svg>
                </span>
                <!-- Descrpcion del valor -->
                <div class="text-gray-500 text-md p-2">
                    Se refiere a la capacidad del niño y la niña para persistir y continuar a pesar de las
                    dificultades que se les presenten en su vida.
                </div>
            </li>

            <li class="cursor-pointer my-1">
                <span class="font-bold text-xl tracking-tight text-gray-500 flex flex-row justify-between items-center">
                    <!-- Nombre del valor -->
                    <p>Respeto</p>
                    <svg class="text-gray-500 mr-1"xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                    </svg>
                </span>
                <!-- Descrpcion del valor -->
                <div class="text-gray-500 text-md p-2">
                    Se refiere al desarrollar el amor por sí mismo y así, a partir de esto, generar un ambiente
                    armónico de convivencia entre los miembros de toda la comunidad educativa.
                </div>
            </li>

            <li class="cursor-pointer my-1">
                <span class="font-bold text-xl tracking-tight text-gray-500 flex flex-row justify-between items-center">
                    <!-- Nombre del valor -->
                    <p>Responsabilidad</p>
                    <svg class="text-gray-500 mr-1"xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                    </svg>
                </span>
                <!-- Descrpcion del valor -->
                <div class="text-gray-500 text-md p-2">
                    La responsabilidad nos llevará a convivir de una manera pacífica y equitativa. Por lo cual es
                    elemental cumplir con lo que nos hemos comprometido para mantener una estabilidad permanente de
                    nuestras relaciones entre párvulos, persona y familias.
                </div>
            </li>

            <li class="cursor-pointer my-1">
                <span class="font-bold text-xl tracking-tight text-gray-500 flex flex-row justify-between items-center">
                    <!-- Nombre del valor -->
                    <p>Soliraridad</p>
                    <svg class="text-gray-500 mr-1"xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                    </svg>
                </span>
                <!-- Descrpcion del valor -->
                <div class="text-gray-500 text-md p-2">
                    Se refiere a la capacidad de entregar apoyo, a través de la empatía.
                </div>
            </li>

            <li class="cursor-pointer my-1">
                <span class="font-bold text-xl tracking-tight text-gray-500 flex flex-row justify-between items-center">
                    <!-- Nombre del valor -->
                    <p>Lealtad</p>
                    <svg class="text-gray-500 mr-1"xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                    </svg>
                </span>
                <!-- Descrpcion del valor -->
                <div class="text-gray-500 text-md p-2">
                    Todos esperamos la lealtad del otro y este sentido la lealtad nos permitirá tener un auténtico
                    éxito en nuestras relaciones.
                </div>
            </li>

            <li class="cursor-pointer my-1">
                <span class="font-bold text-xl tracking-tight text-gray-500 flex flex-row justify-between items-center">
                    <!-- Nombre del valor -->
                    <p>Unidad</p>
                    <svg class="text-gray-500 mr-1"xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                    </svg>
                </span>
                <!-- Descrpcion del valor -->
                <div class="text-gray-500 text-md p-2">
                    Acción o efecto de unión dentro de una comunidad educativa, estableciendo estrategias,
                    favoreciendo el trabajo en equipo en donde cada integrante contribuye para establecer acuerdo
                    que beneficien el cumplimiento de las metas institucionales establecidas a corto y largo plazo.
                </div>
            </li>

            <li class="cursor-pointer my-1">
                <span class="font-bold text-xl tracking-tight text-gray-500 flex flex-row justify-between items-center">
                    <!-- Nombre del valor -->
                    <p>Compromisos</p>
                    <svg class="text-gray-500 mr-1"xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                    </svg>
                </span>
                <!-- Descrpcion del valor -->
                <div class="text-gray-500 text-md p-2">
                    Cumplir con sus obligaciones haciendo un poco más de lo esperado al grado de sorprender, vive y
                    piensa sus energías para sacar adelante los proyectos que inicia.
                </div>
            </li>

        </ul>
    </div>
@endsection


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script>
    $(document).on('click', '.accordion li', function(e) {
        $(this).find('div').slideToggle();
        $(this).find('svg').toggleClass('flipY');
    });
</script>


<style>
    .accordion li>div {
        display: none;
    }

    .accordion .flipY {
        transform: rotate3d(1, 0, 0, 180deg);
    }

    .accordion svg {
        transition: all 1s cubic-bezier(0, .5, 0, 1);
    }
</style>
