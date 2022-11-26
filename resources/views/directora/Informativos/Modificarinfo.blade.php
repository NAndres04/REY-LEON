@extends('home')

@section('titulodirectora')
      
@endsection    

@section('contenidodirectora')


<br>


<form action="{{ route('info.update', [$informativo->id]) }}" method="post" novalidate>
    @csrf
        @method('put')
        <!--- COnfiguracion del div--->
        <div class="grid grid-cols-2">
            <div class="w-full  p-8">
                <h1 class=" text-2xl font-bold">Administrar informativo</h1>
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
                        value="{{ $informativo->titulo }}" id="titulo" name="titulo" placeholder="Ingrese el título" />
                    <!--- Mensaje de error --->
                    @error('titulo')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>
                <!--- Div para modificar la descripcion --->
                <div class="mb-6 mt-6">
                    <!--- Titulo descripcion --->
                    <label class="block text-gray-700 text-sm font-semibold mb-2" htmlFor="password">
                        Descripción
                    </label>
                    <!--- Input para rescatar la descripcion de un informativo y modificarla --->
                    <input type="text"
                        class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                        appearance-none @error('descripcion') border-red-500 @enderror"
                        value="{{ $informativo->descripcion }}" id="descripcion" name="descripcion"
                        placeholder="Ingrese la descripcion" />
                    <!--- Mensaje de error --->
                    @error('descripcion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>
                <!--- Boton para redirigir al apartado volver al menu --->
                <div class="flex mt-3">
                    <a href="/informativos"
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
</form>


@endsection    