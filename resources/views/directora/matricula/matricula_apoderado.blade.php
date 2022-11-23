@extends('home')

@section('titulodirectora')
      
@endsection    

@section('contenidodirectora')
<div class="w-full bg-grey-lightest">
    <div class="container mx-auto py-8 flex">
        <div class="w-5/6 lg:w-1/2 mx-auto bg-white rounded shadow">
            <div class="py-4 px-8 text-black text-2xl border-b border-grey-lighter font-bold text-center flex justify-between">
                <h6 class="text-blueGray-700 text-xl font-bold">Matrícula</h6>
                <button class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                <a href="/buscar_apoderado">Registrar Alumno</a> 
                </button>
            </div>
            <div class="py-4 px-8">
                <h2 class="text-lg text-gray-700 font-semibold">Información Personal del Apoderado</h2>
                <form action="{{route('apoderado.store')}}" method="POST">
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
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="correo">Correo Electrónico</label>
                            <input type="email" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('correo') border-red-500 @enderror"
                            value="{{old('correo')}}"
                            id="correo"
                            name="correo"
                            placeholder="Correo Electrónico"
                            />
                            @error('correo')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="situacion_laboral">Situación Laboral</label>
                            <select class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            @error ('situacion_laboral') border-red-500 @enderror" 
                            value="{{old('situacion_laboral')}}" 
                            id="situacion_laboral" 
                            name="situacion_laboral">
                            <option>.:: Seleccione Situación Laboral ::.</option>
                            <option value="Trabajador Dependiente">Trabajador Dependiente</option>
                            <option value="Trabajador Independiente">Trabajador Independiente</option>
                            <option value="Cesante">Cesante</option>
                            </select>
                            @error('situacion_laboral')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="tipo_salud">Tipo de Salud</label>
                            <select class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            @error ('tipo_salud') border-red-500 @enderror" 
                            value="{{old('tipo_salud')}}" 
                            id="tipo_salud" 
                            name="tipo_salud">
                            <option>.:: Seleccione Tipo de Salud ::.</option>
                            <option value="Fonasa">Fonasa</option>
                            <option value="Isapre">Isapre</option>
                            <option value="No Aplica">No Aplica</option>
                            </select>
                            @error('tipo_salud')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <button class="bg-green-500 text-white active:bg-green-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                            Guardar
                            </button>
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

