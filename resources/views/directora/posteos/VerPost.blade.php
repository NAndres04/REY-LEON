@extends('home')

@section('titulodirectora')
@endsection

@section('contenidodirectora')
    <div class="grid grid-cols-12">
        @foreach ($actividades as $actividad)
            <form action="{{ route('posts.verPublicacion', [$actividad->id]) }}" method="get" novalidate class="col-span-4">
                @csrf
                <script src="https://cdn.tailwindcss.com"></script>
                <div class="mx-auto w-full">
                    <a
                        class="relative inline-block w-full transform transition-transform duration-300 ease-in-out hover:-translate-y-2">
                        <div class="rounded-lg bg-white p-4 mt-5">
                            <span>{{ $actividad->titulo }}</span>
                            <div class="relative flex h-52 justify-center overflow-hidden rounded-lg">
                                <div class="py-6">
                                    <form action="{{ route('posts.verPublicacion', [$actividad->id]) }}" method="get"
                                        novalidate>
                                        @csrf
                                        <img src="<?php echo $actividad->imagen; ?>" />
                                    </form>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p
                                    class="text-primary mt-2 inline-block whitespace-nowrap rounded-xl font-semibold leading-tight mb-auto">
                                    <span>{{ $actividad->descripcion }}</span>
                                </p>
                            </div>
                            <button type="submit"
                                class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Ver
                                publicación</button>
                        </div>
                    </a>
                </div>
            </form>
        @endforeach
    </div>
@endsection
