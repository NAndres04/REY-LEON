@extends('home')

@section('titulodirectora')
      
@endsection    

@section('contenidodirectora')
<div class="w-full bg-grey-lightest">
    <div class="container mx-auto py-8 flex">
        <div class="w-5/6 lg:w-1/2 mx-auto bg-white rounded shadow">
            <div class="py-4 px-8 text-black text-2xl border-b border-grey-lighter font-bold ">Modificar Información del Alumno</div>
            <div class="py-4 px-8">
                <form action="{{ route('alumno.update', $alumnos) }}" method="POST">           
                    @csrf
                    @method('put')
                    <h2 class="text-lg text-gray-700 font-semibold">Información Personal del Alumno</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="rut">RUT</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('rut') border-red-500 @enderror"
                            value="{{$alumnos->rut}}"
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
                            appearance-none"
                            id="nombre"
                            value="{{$alumnos->nombre}}"
                            name="nombre"
                            />
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="ap_paterno">Apellido Paterno</label>
                            <input type="text" 
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            appearance-none @error ('ap_paterno') border-red-500 @enderror"
                            value="{{$alumnos->ap_paterno}}"
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
                            value="{{$alumnos->ap_materno}}"
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
                            value="{{$alumnos->fecha_nac}}"
                            id="fecha_nac"
                            name="fecha_nac"
                            />
                            @error('fecha_nac')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="nacionalidad">Nacionalidad</label>
                            <select class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            @error ('edad') border-red-500 @enderror" 
                            value="{{$alumnos->nacionalidad}}" 
                            id="nacionalidad" 
                            name="nacionalidad">
                            <option>.:: Seleccione nacionalidad ::.</option>
                            <option value="{{ $alumnos->nacionalidad }}" @if($alumnos->nacionalidad == $alumnos->nacionalidad ) selected @endif>{{ $alumnos->nacionalidad  }}</option>
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
                            value="{{$alumnos->domicilio}}"
                            id="domicilio"
                            name="domicilio"
                            />
                            @error('domicilio')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="edad">Edad</label>
                            <select class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            @error ('edad') border-red-500 @enderror" 
                            value="{{$alumnos->edad}}" 
                            id="edad" 
                            name="edad">
                            <option>.:: Seleccione Edad ::.</option>
                            <option value="{{ $alumnos->edad }}" @if($alumnos->edad == $alumnos->edad ) selected @endif>{{ $alumnos->edad  }}</option>
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
                            value="{{$alumnos->nombre_emergencia}}"
                            id="nombre_emergencia"
                            name="nombre_emergencia"
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
                            value="{{$alumnos->fono_emergencia}}"
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
                    <h2 class="text-lg text-gray-700 font-semibold">Selecionar Horario del Alumno</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                    <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="id_curso">Curso</label>
                            <select class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full
                            @error ('id_curso') border-red-500 @enderror">
                            @foreach ($cursos as $value )
                            <option value="{{ $value->id }}" @if($value->id == $alumnos->id_curso) selected @endif>{{ $value->nombre  }}</option>
                            @endforeach
                            </select>
                            @error('id_curso')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}} </p>
                            @enderror
                        </div>
                    <br>
                    <div>
                    <button class="bg-green-500 text-white active:bg-green-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">Modificar</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 
