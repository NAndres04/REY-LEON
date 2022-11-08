<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <title>KingLions Calama - Iniciar sesión</title>
</head>
<body class="bg-white h-screen">
    <div class="w-full flex flex-wrap">
        <!-- Login Section -->
        <div class="w-full md:w-1/2 flex flex-col">
            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
            <h2 class="text-2xl font-semibold text-green-800 text-center">Bienvenido</h2>
            <p class="text-xl text-gray-600 text-center">Por favor ingrese sus datos!</p>
                <form class="flex flex-col pt-3 md:pt-8" action="{{route('login')}}" method="POST"">
                    @csrf
                    @if (session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{session('mensaje')}} </p>
                    @endif
                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg text-green-600">Email</label>
                        <input type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline
                        @error ('email') border-red-500 @enderror" 
                        value="{{old('email')}}"
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Email"
                        />
                        @error('email')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                        @enderror
                    </div>
                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg text-green-600">Contraseña</label>
                        <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline
                        @error ('password') border-red-500 @enderror"
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Contraseña"
                        />
                        @error('password')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                        @enderror 
                    </div>
                    <input type="submit" value="Iniciar sesión" class="bg-green-600 text-white font-bold text-lg hover:bg-green-700 p-2 mt-8">
                </form>
                <div class="text-center pt-12 pb-12">
                    <p>¿Desea volver al inicio? <a href="/" class="underline font-semibold">Seleccione aquí</a></p>
                </div>
            </div>
        </div>
        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="{{ asset('img/banner.jpg') }}">
        </div>
    </div>
</body>
</html>