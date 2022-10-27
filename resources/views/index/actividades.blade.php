@extends('layouts.app')
<!--- Titulo de la vista --->
@section('titulo')
@endsection
<!--- Contenido del frame --->
@section('contenido')
    <section>
        <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12 dark:text-gray-50">
            <a rel="noopener noreferrer" href="#"
                class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-900"
                id="btn">
                <!--- Imagen de la actividad --->
                <img src="{{ asset('img/Actividades1.jpg') }}" alt=""
                    class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 ">
                <div class="p-6 space-y-2 lg:col-span-5">
                    <!--- Titulo de la actividad --->
                    <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">Bailes típicos chilenos.</h3>
                        <!--- Fecha de la actividad --->
                    <span class="text-xs ">Mayo 19, 2022</span>
                    <!--- Descripcion de la actividad --->
                    <p>Algunos de los pupilos del establecimiento presentaron algunos bailes tipicos chilenos, entre ellos
                        se presentaron bailes de cueca, vailes de rapa nui entre otros.</p>
                </div>
            </a>
            <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 co">
                <a rel="noopener noreferrer" href="#"
                    class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 dark:text-gray-50">
                    <!--- Imagen de la actividad --->
                    <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500 "src="https://www.junji.gob.cl/wp-content/uploads/2018/07/001-1.jpg">
                    <div class="p-6 space-y-2">
                        <!--- Titulo de la actividad --->
                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Presentación de bomberos.</h3>
                            <!--- Fecha de la actividad --->
                        <span class="text-xs dark:text-gray-400">Noviembre 19, 2021</span>
                        <!--- Descripcion de la actividad --->
                        <p>Los bomberos de la zona se acercaron al establecimiento para mostrarle los artículos con los
                            cuales combaten los incendios, además de esto se realizó una convivencia.</p>
                    </div>
                </a>
                <a rel="noopener noreferrer" href="#"
                    class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 dark:text-gray-50">
                    <!--- Imagen de la actividad --->
                    <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="https://www.comdescalama.cl/wp-content/uploads/2022/08/WhatsApp-Image-2022-08-10-at-10.47.00-AM.jpeg">
                    <div class="p-6 space-y-2">
                        <!--- Titulo de la actividad --->
                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Comidas típicas de cada país.</h3>
                            <!--- Fecha de la actividad --->
                        <span class="text-xs dark:text-gray-50">Octubre 19, 2021</span>
                        <!--- Descripcion de la actividad --->
                        <p>Los pupilos del establecimiento junto a los apoderados realizaron la receta de cada uno de los
                            países cercanos a chile disgustando platos de toda la zona sur América.</p>
                    </div>
                </a>
                <a rel="noopener noreferrer" href="#"
                    class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                    <!--- Imagen de la actividad --->
                    <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="https://i0.wp.com/live.staticflickr.com/65535/49122570646_058a3b927c_b.jpg?resize=1024%2C683&ssl=1">
                    <div class="p-6 space-y-2">
                        <!--- Titulo de la actividad --->
                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Bailes típicos chilenos.</h3>
                            <!--- Fecha de la actividad --->
                        <span class="text-xs dark:text-gray-400">Septiembre 13, 2021</span>
                        <!--- Descripcion de la actividad --->
                        <p>Algunos de los pupilos participaron en la competencia de bailes chilenos en los cuales se
                            realizaron diferentes tipos de bailes como la cueca, sau sau y varios más.</p>
                    </div>
                </a>
                <a rel="noopener noreferrer" href="#"
                    class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
                    <!--- Imagen de la actividad --->
                    <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="https://i3.visitchile.com/img/GalleryContent/279/Parque_Loa.jpg">
                    <div class="p-6 space-y-2">
                        <!--- Titulo de la actividad --->
                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Salida a lugares reconocidos.</h3>
                            <!--- Fecha de la actividad --->
                        <span class="text-xs dark:text-gray-400">Junio 11, 2021</span>
                        <!--- Descripcion de la actividad --->
                        <p>Algunos de los pupilos pudieron explorar las diferentes estructuras más conmovedoras de la ciudad
                            de calama, además de esto visitaron algunos parques.,</p>
                    </div>
                </a>
                <a rel="noopener noreferrer" href="#"
                    class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
                    <!--- Imagen de la actividad --->
                    <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="https://www.etapainfantil.com/wp-content/uploads/2019/03/reciclaje-700x467.jpg">
                    <div class="p-6 space-y-2">
                        <!--- Titulo de la actividad --->
                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Reciclaje e invernadero.</h3>
                            <!--- Fecha de la actividad --->
                        <span class="text-xs dark:text-gray-400">Agosto 25, 2021</span>
                        <!--- Descripcion de la actividad --->
                        <p>Se les enseñó a los pupilos las diferentes zonas de reciclaje dentro del establecimiento y de qué
                            manera se deben organizar y administrar cada compuesto desechado, por otro lado, también se les
                            enseñó el invernadero donde se plantan las cohechas del jardín.</p>
                    </div>
                </a>
                <a rel="noopener noreferrer" href="#"
                    class="max-w-sm mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900 hidden sm:block">
                    <!--- Imagen de la actividad --->
                    <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="https://diarioiquique.files.wordpress.com/2012/06/dsc_2591.jpg">
                    <div class="p-6 space-y-2">
                        <!--- Titulo de la actividad --->
                        <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">Conmemoración y saludos.</h3>
                            <!--- Fecha de la actividad --->
                        <span class="text-xs dark:text-gray-400">abril 26, 2021</span>
                        <!--- Descripcion de la actividad --->
                        <p>Se les dio la premiación y bienvenida a los pupilos nuevos en el establecimiento con actividades
                            y convivencias para el inicio de educación.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    </div>
@endsection
