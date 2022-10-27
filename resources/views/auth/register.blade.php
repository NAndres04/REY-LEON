@extends('layouts.app')

@section('titulo')
      
@endsection    

@section('contenido')

 <div class="py-6 h-screen">
  <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
        <div class="hidden lg:block lg:w-1/2 bg-cover" style="background-image:url('https://images.unsplash.com/photo-1546514714-df0ccc50d7bf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=667&q=80')"></div>
        <div class="w-full p-8 lg:w-1/2">
            <h2 class="text-2xl font-semibold text-gray-700 text-center">Bienvenido</h2>
            <p class="text-xl text-gray-600 text-center">Por favor ingrese sus datos!</p>
            <a href="#" class="flex items-center justify-center mt-4 text-white rounded-lg shadow-md hover:bg-gray-100">
            </a>
            <!-- crear usuario  -->
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Nombre</label>
                <input 
                class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none
                 @error ('name') border-red-500 @enderror" 
                value="{{old('name')}}"
                id="name"
                name="name"
                type="text"
                placeholder="Nombre"
                />
                @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                @enderror
            </div>
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Apellido</label>
                <input 
                class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none 
                @error ('username') border-red-500 @enderror" 
                id="username"
                name="username"
                type="text"
                placeholder="Apellido"
                />
                @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                @enderror
            </div>
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input 
                class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none
                @error ('email') border-red-500 @enderror" 
                id="email"
                name="email"
                type="email"
                placeholder="Email"
                />
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                @enderror
            </div>

            <div class="mt-4">
                
                <div class="flex justify-between">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
                </div> 
                <input 
                class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none
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

            <div class="mt-4">
                
                <div class="flex justify-between">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Repite tu Contraseña</label>
                </div> 
                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" 
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                placeholder="Repite tu Contraseña"
                />            
            </div>

            <div class="mt-8">
                <button class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Crear cuenta</button>
            </div>
            </form>
        </div>
    </div>
 </div>

@endsection 