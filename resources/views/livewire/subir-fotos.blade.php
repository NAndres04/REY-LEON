<div class="py-32 h-screen ">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
        <div class="w-full p-8 ">
            <h2 class="text-2xl font-semibold text-gray-700 text-center">Publicar actividad</h2>
            <p class="text-xl text-gray-600 text-center">Por favor ingrese las fotos!</p>

            <!-- crear publicacion  -->
            <form wire:submit.prevent="save" enctype="multipart/form-data">
                <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="titulo">Título</label>
                    <input
                        class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none
                  @error('titulo') border-red-500 @enderror"
                        id="titulo" wire:model="titulo" type="text" placeholder="Ingrese el título"
                        value="{{ old('titulo') }}" />
                    @error('titulo')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>
                <!-- fin crear publicacion -->
                <!-- Descripcion -->
                <div class="mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcion">Descripción</label>
                    <textarea cols="10" rows="5"
                        class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none
                @error('descripcion') border-red-500 @enderror"
                        id="descripcion" wire:model="descripcion" placeholder="Ingrese la descripción">
                {{ old('descripcion') }} 
                </textarea>
                    @error('descripcion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>
                <!-- fin Descripcion -->
                <!-- IMAGENES -->
                <div class="mt-8">
                    <input name="imagen" type="file" wire:model="fotografias" multiple/>
                    @error('imagen')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                    @enderror
                </div>
                <!-- IMAGENES -->
                <div class="mt-8">
                    <button type="submit"
                        class="border bg-white text-black font-bold py-2 px-4 w-full rounded border-amber-500 group hover:bg-amber-500 
                        rounded-xss
                        transition-all duration-200">Publicar
                        actividad</button>
                </div>
            </form>
        </div>
    </div>
</div>























































