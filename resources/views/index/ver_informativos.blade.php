@extends('layouts.app')
<!--- Titulo de la vista --->
@section('titulo')
@endsection


<!--- Contenido del frame --->
@section('contenido')
{{ $informativo->titulo }}

<br>
{{ $informativo->descripcion }}


@section('contenido')
    <!-- Gogole Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap"
        rel="stylesheet" />

    <style>
        section {
            font-family: "Poppins", sans-serif;
        }
    </style>

    <!-- Page Main -->
    <main class="flex flex-col items-center justify-center mt-12">
        <!-- Hero -->
        <section
            class="flex flex-wrap items-center -mx-3 font-sans px-4 w-full lg:max-w-screen-lg sm:max-w-screen-sm md:max-w-screen-md pb-20">
            <!-- Column-1 -->
            <div class="px-3 w-full lg:w-2/5">
                <div class="mx-auto mb-8 max-w-lg text-center lg:mx-0 lg:max-w-md lg:text-left">
                    <h2 class="mb-4 text-3xl font-bold  lg:text-5xl">
                        Informativo
                        <span class="text-5xl text-amber-600 leading-relaxeds">{{ $informativo->titulo }}
                        </span>
                    </h2>
                    <p class="visible mx-0 mt-3 mb-0 text-sm leading-relaxed text-left text-slate-400">
                        Establecimiento subvencionado King Lions, Calama.
                    </p>
                </div>
            </div>

            <!-- Descripcion del establecimiento -->
            <section class="p-20 space-y-8">
                <h1 class="text-4xl text-center">{{ $informativo->titulo }}</h1>
                <p>
                    {{ $informativo->descripcion }}
                </p>
                <div>
                    <a href="/información"
                        class="rounded-2xl border px-3 py-1 text-xs font-semibold bg-white text-black w-72 border-amber-500 group hover:bg-amber-500 
                        rounded-xss
                        transition-all duration-200 text-center">Cerrar</a>
                </div>

            </section>
            
        </section>
        
    </main>
@endsection

@endsection