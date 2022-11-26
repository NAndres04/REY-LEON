@extends('home')

@section('titulodirectora')
@endsection

@section('contenidodirectora')

    <div class="ml-56 px-3 lg:w-2/5">
        <div class="mx-auto mb-8 max-w-lg text-center lg:mx-0 lg:max-w-md lg:text-left">
            <h2 class="mb-4 text-3xl font-bold  lg:text-5xl mt-6">
                Editor de
                <span class="text-5xl text-amber-600 leading-relaxeds">Noticias
            </h2>
        </div>
    </div>

    <!--- Inicio de formulario con un valor de 12 columnas para el dic de contenido --->
    <div class="grid grid-cols-1">
        <!--- Foreach para recorredi de todos los informativos --->
        <!--- Formulario para enviar la la id de una actividad en especifico al seleccionarla a travez de un botton, ademas se configura con un espaciado de 4 columnos dentro del div --->
        <form action="{{ route('info.update', [$informativo->id]) }}" method="post" novalidate>
            @csrf
            @method('put')
            <!--- LLamado a diseño para formularios personalizados (Dentro del for each, ya que se debe personalizar en cada actividad ingresada) --->
            <script src="https://cdn.tailwindcss.com"></script>
            <div class="mx-auto w-full">

                <!-- This is an example component -->
                <div class='flex items-center justify-center mb-8'>
                    <div class="rounded-xl border p-5 shadow-md w-9/12 bg-white">
                        <div class="mt-4 mb-6">
                            <div class="mb-3 text-xl font-bold"> 
                                <label
                                    class="block text-gray-700 text-sm font-semibold mb-2" htmlFor="password">
                                    Título
                                </label>
                                <input type="text"
                                    class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-80
                                    appearance-none @error('titulo') border-red-500 @enderror"
                                    id="titulo" name="titulo" placeholder="{{ $informativo->titulo }}" />
                                <!--- Mensaje de error --->
                                @error('titulo')
                                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="text-sm text-neutral-600">
                                <label class="block text-gray-700 text-sm font-semibold mb-2" htmlFor="password">
                                    Descripción
                                </label>
                                <input type="text"
                                    class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                                appearance-none @error('descripcion') border-red-500 @enderror"
                                    id="descripcion" name="descripcion" placeholder="{{ $informativo->descripcion }}" />
                                <!--- Mensaje de error --->
                                @error('descripcion')
                                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex items-center justify-between py-4">
                            <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Calama,
                                Segunda región</h2>
                            <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
                        </div>
                        <section class="flex items-center space-x-8">
                            <div class="flex mt-3">
                                @csrf
                                <button type="submit"
                                    class="rounded-2xl border px-3 py-1 text-xs font-semibold bg-white text-black w-full border-amber-500 group hover:bg-amber-500 
            rounded-xss
            transition-all duration-200">Editar
                                    anuncio</button>
                            </div>

                            <div class="flex mt-3">
                                <a href="/informativos"
                                    class="rounded-2xl border px-3 py-1 text-xs font-semibold bg-white text-black w-full border-amber-500 group hover:bg-amber-500 
            rounded-xss
            transition-all duration-200">Volver
                                    atrás</a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
