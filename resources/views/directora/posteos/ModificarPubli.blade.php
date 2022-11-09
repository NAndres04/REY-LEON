@extends('home')

@section('titulodirectora')
@endsection

@section('contenidodirectora')
    <div class="py-6 ">
        <form action="{{ route('posts.updatePubli', [$actividad->id]) }}" method="post" novalidate>
            @csrf
            @method('put')
            <div>
                <input type="text"
                    class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
    appearance-none @error('rut') border-red-500 @enderror"
                    value="{{ $actividad->titulo }}" id="titulo" name="titulo" placeholder="Ingrese el titulo" />
                @error('rut')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            <div>
                <input type="text"
                    class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
    appearance-none @error('rut') border-red-500 @enderror"
                    value="{{ $actividad->descripcion }}" id="descripcion" name="descripcion"
                    placeholder="Ingrese la descripcion" />
                @error('rut')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            @foreach ($actividad->galeria as $foto)
                <img src="<?php echo $foto; ?>" />
            @endforeach
    </div>
    <button type="submit" class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Modificar
    </button>
    </form>
@endsection
