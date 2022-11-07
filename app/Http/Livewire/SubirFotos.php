<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Post;             
use Illuminate\Support\Facades\Auth;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
             
class SubirFotos extends Component
{
  use WithFileUploads;

  public $titulo = '';
  public $descripcion = '';
  public $fotografias = [];
  public $foto;

  public function save(){
    $this->validate([
      'fotografias.*' => 'image|max:8128', // 1MB Max
    ]);

    // Este tiene un string con las fotos concatenadas con ++
    $galeria_string = implode("++", array_map(function($foto) { 
      return $foto->storeOnCloudinary('samples')->getPath();
    }, $this->fotografias));
   

    // Este tiene las imagenes en formato arreglo
    $galeria_array = explode('++', $galeria_string);

    Post::create([
      'titulo' => $this->titulo,
      'descripcion' => $this->descripcion,
      'imagen' => array_values($galeria_array)[0],
      'galeria' => $galeria_string, 
      'user_id' => auth()->user()->id
    ]);

    $galeria_array = '';
    $galeria_string= '';
    return redirect()->route('posts.ver', auth()->user()->username);
    
  }
}
