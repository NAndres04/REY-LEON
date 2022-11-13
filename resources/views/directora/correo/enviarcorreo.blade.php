@extends('home')

@section('titulodirectora')
      
@endsection    

@section('contenidodirectora')
<div class="py-32 h-screen ">
      <!-- crear   -->
      
      <form action="{{route('enviarcorreo.store')}}" method="get" novalidate>
        @csrf

        <div class="mt-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="titulo">Titulo: </label>
            <input 
            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none
            @error ('titulo') border-red-500 @enderror" 
            id="titulo"
            name="titulo"
            type="text"
            placeholder="Ingrese el destinatario"
            value="{{old('titulo')}}"
            />
            @error('titulo')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
            @enderror
        </div>
        <!-- fin crear publicacion -->

        <!-- asunto -->
        <div class="mt-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="asunto">Asunto</label>
          <textarea 
          class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none
          @error ('asunto') border-red-500 @enderror" 
          id="asunto"
          name="asunto"
          placeholder="Ingrese la descripción"
          >
          {{old('asunto')}} 
          </textarea>
          @error('asunto')
              <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
          @enderror
      </div>
      <!-- fin asunto -->


      <!-- Mensaje -->
      <div class="mt-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="mensaje">Mensaje:</label>
        <textarea 
        class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none
        @error ('mensaje') border-red-500 @enderror" 
        id="mensaje"
        name="mensaje"
        placeholder="Ingrese el mensaje"
        >
        {{old('mensaje')}} 
        </textarea>
        @error('mensaje')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
        @enderror
    </div>
      <!-- Mensaje -->
      <div class="mt-8">
        <button type="submit" class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Enviar correo</button>
    </div>
 
    </form>
  @if (session('info'))
      <script>
        alert("{{session('info')}}");
      </script>
  @endif
         
</div>
@endsection   
     