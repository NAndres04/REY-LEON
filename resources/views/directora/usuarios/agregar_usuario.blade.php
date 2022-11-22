@extends('home')

@section('titulodirectora')
      
@endsection    

@section('contenidodirectora')
<div class="w-full bg-grey-lightest">
    <div class="container mx-auto py-8 flex">
        <div class="w-5/6 lg:w-1/2 mx-auto bg-white rounded shadow">
            <div class="py-4 px-8 text-black text-2xl border-b border-grey-lighter font-bold ">Registrar Personal Educativo</div>
            <div class="py-4 px-8">
                <h2 class="text-lg text-gray-700 font-semibold capitalize">Información Personal</h2>
                <form action="{{route('usuario.store')}}" method="POST" novalidate>
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="rut">RUT</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('rut') border-red-500 @enderror"
                            value="{{old('rut')}}"
                            id="rut"
                            name="rut"
                            placeholder="12345678-9"
                            maxlength="11"
                            onkeyup="this.value=validate_input(this.value)" 
                            oninput="form_rut(this)"
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
                            value="{{old('nombre')}}"
                            id="nombre"
                            name="nombre"
                            placeholder="Nombres"
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
                            value="{{old('ap_paterno')}}"
                            id="ap_paterno"
                            name="ap_paterno"
                            placeholder="Apellido Paterno"
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
                            value="{{old('ap_materno')}}"
                            id="ap_materno"
                            name="ap_materno"
                            placeholder="Apellido Materno"
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
                            value="{{old('fecha_nac')}}"
                            id="fecha_nac"
                            name="fecha_nac"
                            placeholder="Fecha de Nacimiento"
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
                            value="{{old('fono')}}"
                            id="fono"
                            name="fono"
                            placeholder="912345678"
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
                            value="{{old('direccion')}}"
                            id="direccion"
                            name="direccion"
                            placeholder="Dirección"
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
                            value="{{old('nro_casa')}}"
                            id="nro_casa"
                            name="nro_casa"
                            placeholder="Número de Casa"
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
                            <option value="1">Directora</option>
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
                            value="{{old('email')}}"
                            id="email"
                            name="email"
                            placeholder="Correo Electrónico"
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
                            value="{{old('password')}}"
                            id="password"
                            name="password"
                            placeholder="Contraseña"
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
                            id="password_confirmation"
                            name="password_confirmation"
                            placeholder="Repite tu Contraseña"
                            />
                        </div>
                        <div>
                           <button class="bg-green-500 text-white active:bg-green-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">Guardar</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection 
<script>
    function validate_input(string){//Solo numeros
    var out = '';
    var filtro = '1234567890k-';//Caracteres validos
	
    //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
    for (var i=0; i<string.length; i++)
       if (filtro.indexOf(string.charAt(i)) != -1) 
             //Se añaden a la salida los caracteres validos
	     out += string.charAt(i);
	
    //Retornar valor filtrado
    return out;
} 
</script>

<script>
    function form_rut(rut) {
       // Despejar Puntos
       var valor = rut.value.replace('.','');
    // Despejar Guión
    valor = valor.replace('-','');

    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0,-1);
    dv = valor.slice(-1);

    // Formatear RUN
    rut.value = cuerpo + '-'+ dv
}
</script>


