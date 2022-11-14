@extends('home')

@section('titulodirectora')
@endsection

@section('contenidodirectora')
    <script src="https://cdn.tailwindcss.com"></script>

    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <form action="{{ route('enviarcorreo.store') }}" method="get" novalidate>
            @csrf
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-amber-400 to-amber-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                </div>
                <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                    <div class="max-w-md mx-auto">
                        <div>
                            <h1 class="text-2xl font-semibold">Enviar correo electronico</h1>
                        </div>
                        <div class="divide-y divide-gray-200">
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <div class="relative">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="titulo">Titulo:
                                    </label>
                                    <input
                                        class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none
                              @error('titulo') border-red-500 @enderror"
                                        id="titulo" name="titulo" type="text" placeholder="Ingrese el destinatario"
                                        value="{{ old('titulo') }}" />
                                    @error('titulo')
                                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                            {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="relative">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="asunto">Asunto</label>
                                    <textarea
                                        class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none
                            @error('asunto') border-red-500 @enderror"
                                        id="asunto" name="asunto" placeholder="Ingrese la descripción">
                            {{ old('asunto') }} 
                            </textarea>
                                    @error('asunto')
                                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                            {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="relative">
                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                        for="mensaje">Mensaje:</label>
                                    <textarea
                                        class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none
                          @error('mensaje') border-red-500 @enderror"
                                        id="mensaje" name="mensaje" placeholder="Ingrese el mensaje">
                          {{ old('mensaje') }} 
                          </textarea>
                                    @error('mensaje')
                                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                                            {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="relative">
                                    <button class="bg-amber-600 text-white rounded-md px-2 py-1">Enviar correo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @if (session('info'))
            <script>
                alert("{{ session('info') }}");
            </script>
        @endif
    </div>
    
@endsection
