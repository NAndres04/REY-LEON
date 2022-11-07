@extends('home')

@section('titulodirectora')
      
@endsection    

@section('contenidodirectora')
<div class="w-full bg-grey-lightest" style="padding-top: 4rem;">
    <div class="container mx-auto py-8 flex">
        <div class="w-5/6 lg:w-1/2 mx-auto bg-white rounded shadow">
            <div class="py-4 px-8 text-black text-2xl border-b border-grey-lighter font-bold ">Registrar Personal Educativo</div>
            <div class="py-4 px-8">
                <h2 class="text-lg text-gray-700 font-semibold capitalize">Información Personal</h2>
                <form action="{{route('usuario.update', $usuarios)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="rut">RUT</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('rut') border-red-500 @enderror"
                            value="{{$usuarios->rut}}"
                            id="rut"
                            name="rut"
                            />
                            @error('rut')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombres</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('nombre') border-red-500 @enderror"
                            value="{{$usuarios->nombre}}"
                            id="nombre"
                            name="nombre"
                            />
                            @error('nombre')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="ap_paterno">Apellido Paterno</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('ap_paterno') border-red-500 @enderror"
                            value="{{$usuarios->ap_paterno}}"
                            id="ap_paterno"
                            name="ap_paterno"
                            />
                            @error('ap_paterno')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="ap_materno">Apellido Materno</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('ap_materno') border-red-500 @enderror"
                            value="{{$usuarios->ap_materno}}"
                            id="ap_materno"
                            name="ap_materno"
                            />
                            @error('ap_materno')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="fecha_nac">Fecha de Nacimiento</label>
                            <input type="date" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('fecha_nac') border-red-500 @enderror"
                            value="{{$usuarios->fecha_nac}}"
                            id="fecha_nac"
                            name="fecha_nac"
                            />
                            @error('fecha_nac')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="fono">Teléfono</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('fono') border-red-500 @enderror"
                            value="{{$usuarios->fono}}"
                            id="fono"
                            name="fono"
                            />
                            @error('fono')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="direccion">Dirección</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('direccion') border-red-500 @enderror"
                            value="{{$usuarios->direccion}}"
                            id="direccion"
                            name="direccion"
                            />
                            @error('direccion')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="nro_casa">Número de Casa</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('nro_casa') border-red-500 @enderror"
                            value="{{$usuarios->nro_casa}}"
                            id="nro_casa"
                            name="nro_casa"
                            />
                            @error('nro_casa')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <h2 class="text-lg text-gray-700 font-semibold capitalize">Cuenta</h2>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="rol">Tipo de Cuenta</label>
                            <select class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            @error ('rol') border-red-500 @enderror" 
                            value="{{old('rol')}}" 
                            id="rol" 
                            name="rol">
                            <option value="1">Educadora</option>
                            <option value="0">Directora</option>
                            </select>
                            @error('rol')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Correo Electrónico</label>
                            <input type="email" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('email') border-red-500 @enderror"
                            value="{{$usuarios->email}}"
                            id="email"
                            name="email"
                            />
                            @error('email')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Contraseña</label>
                            <input type="password" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('password') border-red-500 @enderror"
                            value="{{$usuarios->password}}"
                            id="password"
                            name="password"
                            />
                            @error('password')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">Confirmar Contraseña</label>
                            <input type="password" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none"
                            value="{{$usuarios->password}}"
                            id="password_confirmation"
                            name="password_confirmation"
                            />
                        </div>
                        <div class="flex rounded-md bg-white py-4 px-4 overflow-x-auto">
                            <button class="px-6 py-3 bg-green-500 rounded-md text-white font-medium tracking-wide hover:bg-green-700">Modificar</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 
