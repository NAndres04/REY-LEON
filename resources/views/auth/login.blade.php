@extends('layouts.app')

@section('titulo')
     
@endsection    

@section('contenido')

 <div class="py-32 h-screen ">
  <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
        <div class="hidden lg:block lg:w-1/2 bg-cover" style="background-image:url('https://img.freepik.com/free-photo/portrait-gorgeous-hispanic-preschool-teacher-loving-her-job-having-fun-with-her-pupils_662251-1665.jpg?size=626&ext=jpg&ga=GA1.2.789588202.1664478083')"></div>
        <div class="w-full p-8 lg:w-1/2">
            <h2 class="text-2xl font-semibold text-gray-700 text-center">Bienvenido</h2>
            <p class="text-xl text-gray-600 text-center">Por favor ingrese sus datos!</p>
            <a href="#" class="flex items-center justify-center mt-4 text-white rounded-lg shadow-md hover:bg-gray-100">
            </a>
            <!-- crear usuario  -->
            <form action="{{route('login')}}" method="POST" novalidate>
                @csrf
            @if (session('mensaje'))
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{session('mensaje')}} </p>
            @endif
           
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

            

            <div class="mt-8">
                <button class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Iniciar sesión</button>
            </div>
            </form>
        </div>
    </div>
 </div>

@endsection