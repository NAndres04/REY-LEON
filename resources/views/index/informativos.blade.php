@extends('layouts.app')
<!--- Titulo de la vista --->
@section('titulo')
@endsection


<!--- Contenido del frame --->
@section('contenido')
<div class="px-3 lg:w-2/5">
    <div class="mx-auto mb-8 max-w-lg text-center lg:mx-0 lg:max-w-md lg:text-left">
        <h2 class="mb-4 text-3xl font-bold  lg:text-5xl mt-6">
            Publicación de
            <span class="text-5xl text-amber-600 leading-relaxeds">Informativos
        </h2>
    </div>
</div>



<!--- Inicio de formulario con un valor de 12 columnas para el dic de contenido --->
<div class="grid grid-cols-4 mb-52">
    <!--- Foreach para recorredi de todos los informativos --->
    @foreach ($informativos as $informativo)
      
        <!--- Formulario para enviar la la id de una actividad en especifico al seleccionarla a travez de un botton, ademas se configura con un espaciado de 4 columnos dentro del div --->
        <form action="{{ route('info.verInfo', [$informativo->id]) }}" method="get" novalidate class="col-span-1">
            @csrf
            <!--- LLamado a diseño para formularios personalizados (Dentro del for each, ya que se debe personalizar en cada actividad ingresada) --->
            <script src="https://cdn.tailwindcss.com"></script>
            <div class="mx-auto w-full">
                <a
                    class="relative inline-block w-full transform transition-transform duration-300 ease-in-out hover:-translate-y-2">
                    <div class="rounded-lg p-4 mt-5">
                        
                        <div class="pt-1">
                            <div class="text-black absolute">
                                <div class="inline-block h-3 border-l-2 border-amber-600 mr-2"></div><span
                                    class="text-xl">{{ $informativo->titulo }}</span>
                            </div>
                        </div>
                        <!--- Botton para enviar el Id de un informativo seleccionado para poder ir a modificarlo o eliminarlo --->
                        <button type="submit"
                            class="border bg-white text-black font-bold py-2 px-4 w-full rounded mt-16  border-amber-500 group hover:bg-amber-500 
                            rounded-xss
                            transition-all duration-200">Ver
                            más</button>
                     
                    </div>
                </a>
            </div>
        </form>
    @endforeach
</div>
@endsection