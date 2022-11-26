@extends('home')

@section('titulodirectora')
@endsection

@section('contenidodirectora')
    <div class="ml-56 px-3 lg:w-2/5">
        <div class="mx-auto mb-8 max-w-lg text-center lg:mx-0 lg:max-w-md lg:text-left">
            <h2 class="mb-4 text-3xl font-bold  lg:text-5xl mt-6">
                Administración de
                <span class="text-5xl text-amber-600 leading-relaxeds">Noticias
            </h2>
        </div>
    </div>



    <!--- Inicio de formulario con un valor de 12 columnas para el dic de contenido --->
    <div class="grid grid-cols-1">
        <!--- Foreach para recorredi de todos los informativos --->
        @foreach ($informativos as $informativo)
            <!--- Formulario para enviar la la id de una actividad en especifico al seleccionarla a travez de un botton, ademas se configura con un espaciado de 4 columnos dentro del div --->
            <form action="{{ route('verinfo.veruno', [$informativo->id]) }}" method="get" novalidate class="col-span-1">
                @csrf
                <!--- LLamado a diseño para formularios personalizados (Dentro del for each, ya que se debe personalizar en cada actividad ingresada) --->
                <script src="https://cdn.tailwindcss.com"></script>
                <div class="mx-auto w-full">

                    <!-- This is an example component -->
                    <div class='flex items-center justify-center mb-8'>
                        <div class="rounded-xl border p-5 shadow-md w-9/12 bg-white">
                            <div class="flex w-full items-center justify-between border-b pb-3">
                                <div class="flex items-center space-x-8">
                                    <button
                                        class="rounded-2xl border px-3 py-1 text-xs font-semibold bg-white text-black w-full border-amber-500 group hover:bg-amber-500 
                                    rounded-xss
                                    transition-all duration-200">Administrar
                                        noticias</button>
                                </div>
                            </div>

                            <div class="mt-4 mb-6">
                                <div class="mb-3 text-xl font-bold">{{ $informativo->titulo }}
                                </div>
                                <div class="text-sm text-neutral-600">{{ $informativo->descripcion }}</div>
                            </div>

                            <div class="flex items-center justify-between py-4">
                                <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Calama,
                                    Segunda región</h2>
                                <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @endforeach
    </div>
@endsection
