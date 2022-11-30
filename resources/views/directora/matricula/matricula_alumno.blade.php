@extends('home')

@section('titulodirectora')
      
@endsection    

@section('contenidodirectora')
<div class="w-full bg-grey-lightest">
    <div class="container mx-auto py-8 flex">
        <div class="w-5/6 lg:w-1/2 mx-auto bg-white rounded shadow">
            <div class="py-4 px-8 text-black text-2xl border-b border-grey-lighter font-bold ">Matrícula</div>
            <div class="py-4 px-8">
                <h2 class="text-lg text-gray-700 font-semibold">Información Necesaria del Apoderado</h2>
                <form action="{{route('alumno.store')}}" method="POST">                    
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="rut_apoderado">Nombre del Apoderado</label>
                            @foreach ($apoderados as $apoderados )
                            <p type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none"
                            @endforeach
                            />{{ $apoderados->nombre }} {{ $apoderados->ap_paterno }} {{ $apoderados->ap_materno }}
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="rut">RUT del Apoderado</label>
                            <p type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none"
                            />{{ $apoderados->rut }}
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="rut">Identificador del Apoderado</label>
                            <p type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none"
                            />{{ $apoderados->id }}
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="rut_apoderado">Confirmar Apoderado</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('id_apoderado') border-red-500 @enderror"
                            placeholder="Ingrese el Identificador del Apoderado"
                            value="{{old('id_apoderado')}}"
                            id="id_apoderado"
                            name="id_apoderado"
                            />
                            @error('id_apoderado')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div> 
                    </div>
                    <br>
                    <h2 class="text-lg text-gray-700 font-semibold">Información Personal del Alumno</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="rut">RUT</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('rut') border-red-500 @enderror"
                            value="{{old('rut')}}"
                            id="rut"
                            name="rut"
                            maxlength="11"
                            onkeyup="this.value=validate_input(this.value)" 
                            oninput="form_rut(this)"
                            placeholder="12345678-9"
                            />
                            @error('rut')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombres</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('nombre') border-red-500 @enderror""
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
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="nacionalidad">Nacionalidad</label>
                            <select class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            @error ('nacionalidad') border-red-500 @enderror" 
                            value="{{old('nacionalidad')}}" 
                            id="nacionalidad" 
                            name="nacionalidad">
                            <option>.:: Seleccione Nacionalidad ::.</option>
                            <option value="Brasilera">BRASILERA</option>
                            <option value="Boliviana">BOLIVIANA</option>
                            <option value="Argentina">ARGENTINA</option>
                            <option value="Chilena">CHILENA</option>
                            <option value="Colombiana">COLOMBIANA</option>
                            <option value="Cubana">CUBANA</option>
                            <option value="Dominicana">DOMINICANA</option>
                            <option value="Ecuatoriana">ECUATORIANA</option>
                            <option value="Española">ESPAÑOLA</option>
                            <option value="EstadoUnidense">ESTADOUNIDENSE</option>
                            <option value="Haitiana">HAITIANA</option>
                            <option value="Mexicana">MEXICANA</option>
                            <option value="Panameña">PANAMEÑA</option>
                            <option value="Paraguaya">PARAGUAYA</option>
                            <option value="Peruana">PERUANA</option>
                            <option value="Uruguaya">URUGUAYA</option>
                            <option value="Venezolana">VENEZOLANA</option>
                            </select>
                            @error('nacionalidad')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="domicilio">Domicilio</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('domicilio') border-red-500 @enderror"
                            value="{{old('domicilio')}}"
                            id="domicilio"
                            name="domicilio"
                            placeholder="Domicilio"
                            />
                            @error('domicilio')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="edad">Edad</label>
                            <select class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            @error ('edad') border-red-500 @enderror" 
                            value="{{old('edad')}}" 
                            id="edad" 
                            name="edad">
                            <option>.:: Seleccione Edad ::.</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            </select>
                            @error('edad')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="matricula">Matrícula Física</label>
                        </div>
                    </div>
                    <br>
                    <h2 class="text-lg text-gray-700 font-semibold">Información de Emergencia</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">         
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre_emergencia">Nombre de Emergencia</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('nombre_emergencia') border-red-500 @enderror"
                            value="{{old('nombre_emergencia')}}"
                            id="nombre_emergencia"
                            name="nombre_emergencia"
                            placeholder="Nombre de Emergencia"
                            />
                            @error('nombre_emergencia')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="fono_emergencia">Teléfono de Emergencia</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('fono_emergencia') border-red-500 @enderror"
                            value="{{old('fono_emergencia')}}"
                            id="fono_emergencia"
                            name="fono_emergencia"
                            placeholder="Teléfono de Emergencia"
                            />
                            @error('fono_emergencia')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <h2 class="text-lg text-gray-700 font-semibold">Seleccionar Horario del Alumno</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                    <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="id_curso">Curso</label>
                            <select class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            @error ('id_curso') border-red-500 @enderror" 
                            value="{{old('id_curso')}}" 
                            id="id_curso" 
                            name="id_curso">
                            <option>.:: Seleccione Curso ::.</option>
                            @foreach ($cursos as $curso )
                            <option value="{{$curso->id}}">{{ $curso->nombre }}</option>
                            @endforeach
                            </select>
                            @error('id_curso')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                    <br>
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


