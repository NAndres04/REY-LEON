@extends('home')

@section('titulodirectora')
      
@endsection    

@section('contenidodirectora')
<div class="py-32 h-screen ">
      <!-- crear   -->
      <form action="" method="POST" novalidate>
        <div class="mt-4">
            Seleccione los cursos a enviar correo:
            <table>
            <tr>
           <td> <label>
                curso1
            <input type="checkbox">
            
            </label><br></td>
            <td>
            <label>
                curso2
            <input type="checkbox">
            
            </label><br>
            </td>
            </tr>
            <tr>
                <td> <label>
                     curso3
                 <input type="checkbox">
                 
                 </label><br></td>
                 <td>
                 <label>
                     curso4
                 <input type="checkbox">
                 
                 </label><br>
                 </td>
                 </tr>
            </table>
        </div>
        <!-- fin crear publicacion -->

        <div class="mt-8">
            <button type="submit" class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Publicar actividad</button>
        </div>
        </form>
</div>
@endsection   
     
