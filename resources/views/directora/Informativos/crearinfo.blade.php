@extends('home')

@section('titulodirectora')
@endsection

@section('contenidodirectora')
    <div class="py-32 h-screen ">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
            <div class="w-full p-8">
                <h2 class="text-2xl font-semibold text-gray-700 text-center">Generar Anuncio</h2>
                <!-- crear informativo  -->
                <form action="{{ route('crearinfo.store') }}" method="POST" novalidate>
                    @csrf
                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="titulo">Título</label>
                        <input
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none
                  @error('titulo') border-red-500 @enderror"
                            id="titulo" name="titulo" type="text" placeholder="Ingrese una título"
                            value="{{ old('titulo') }}" />
                        @error('titulo')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                        @enderror
                    </div>
                    <!-- fin crear informativo  -->
                    <!-- Descripcion -->
                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcion">Descripción</label>
                        <textarea cols="30" rows="10"
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none font-serif
                            @error('descripcion') border-red-500 @enderror"
                            id="descripcion" name="descripcion" placeholder="Ingrese una descripción">
                        {{ old('descripcion') }} 
                        </textarea>
                        @error('descripcion')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                        @enderror
                    </div>
                    <!-- fin Descripcion -->
                    <div class="mt-8">
                        <button type="submit"
                            class="border bg-white text-black font-bold py-2 px-4 w-full rounded border-amber-500 group hover:bg-amber-500 
                            rounded-xss
                            transition-all duration-200">Registrar
                            anuncio
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
