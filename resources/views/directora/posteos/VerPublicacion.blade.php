@extends('home')

@section('titulodirectora')
@endsection

@section('contenidodirectora')


    <div class="py-6 h-screen">


        

            <span id="Galeria" hidden><?php echo json_encode($actividad->galeria); ?></span>
            @csrf
            <div class="container max-w-md mx-auto xl:max-w-3xl h-1/6 flex bg-white rounded-lg shadow overflow-hidden">
                <div class="relative hidden xl:block xl:w-1/2 h-full rounded-lg">

                    <article x-data="slider" class="relative w-full flex flex-shrink-0 overflow-hidden shadow-2xl ">
                        <div class="rounded-full bg-gray-600 text-white absolute top-5 right-5 text-sm px-2 text-center z-10">
                            <span x-text="currentIndex"></span>/
                            <span x-text="images.length"></span>
                        </div>
                        <template x-for="(image, index) in images">
                            <figure class="h-96" x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0">
                                <img :src="image" alt="Image"
                                    class="absolute inset-0 z-10 h-full w-full object-cover opacity-70" />
                            </figure>
                        </template>
                        <!--Boton para pasar a la imagen anterior del slider u imagen-->
                        <button @click="back()"
                            class="absolute left-14 top-1/2 -translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
                            <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:-translate-x-0.5"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7">
                                </path>
                            </svg>
                        </button>
                        <!--Boton para pasar al siguiente slider u imagen-->
                        <button @click="next()"
                            class="absolute right-14 top-1/2 translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
                            <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:translate-x-0.5"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </article>
            


                </div>
                <div class="w-full xl:w-1/2 p-8">
                    <h1 class=" text-2xl font-bold">Administrar publicacion</h1>
                    <div class="mb-4 mt-6">
                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                            Titulo
                        </label>
                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                            <span>{{ $actividad->titulo }}</span>
                        </label>
                    </div>
                    <div class="mb-6 mt-6">
                        <label class="block text-gray-700 text-sm font-semibold mb-2" htmlFor="password">
                            Descripcion
                        </label>
                        <label class="block text-gray-700 text-sm font-semibold mb-2">
                            <span>{{ $actividad->descripcion }}</span>
                        </label>
                    </div>
                    <form action="{{ route('posts.ModificarPubli', [$actividad->id]) }}" method="get" novalidate>
                    <div class="flex mt-3">
                        @csrf
                        <button type="submit"
                            class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Editar
                            publicación</button>
                    </div>
                </form>

        <div class="flex mt-3">
            <form action="{{ route('posts.eliminarPubli', [$actividad->id]) }}" method="post" novalidate>
                @csrf
                @method('delete')
                <button type="submit"
                    class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Eliminar
                    publicación</button>
            </form>
        </div>
    </div>

    <!--Scrip para la funcion del carusel-->
    <script>
        document.addEventListener('alpine:init', () => {
            let galeria= document.getElementById("Galeria").textContent;
            console.log(galeria);
            Alpine.data('slider', () => ({
                currentIndex: 1,
                images: JSON.parse(galeria),
                //Comando para volver a la imagen anterior
                back() {
                    if (this.currentIndex > 1) {
                        this.currentIndex = this.currentIndex - 1;
                    }
                },
                //Comando para proceder a la pagina siguiente
                next() {
                    if (this.currentIndex < this.images.length) {
                        this.currentIndex = this.currentIndex + 1;
                    } else if (this.currentIndex <= this.images.length) {
                        this.currentIndex = this.images.length - this.currentIndex + 1
                    }
                },
            }))
        })
    </script>

    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
@endsection
