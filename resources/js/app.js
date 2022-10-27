/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//import './bootstrap';
import {Dropzone} from "dropzone";

Dropzone.autoDiscover =false;
//window.addEventListener('DOMContentLoaded',() =>{
const dropzone = new Dropzone("#dropzone",{
    dictDefaultMessage: "Sube aqui tu imagen",
    acceptedFiles: ".png, .jpg, .jpeg, .gif, video/mp4",
    addRemoveLinks:true,
    dictRemoveFile: "Borrar archivo",
    maxFiles:3,
    uploadMultiple:false,
    setTimeout: 20000,

    init: function(){
      if(document.querySelector('[name="imagen"]').value.trim()){
        const imagenpublicada= {}
        imagenpublicada.size =1234;
        imagenpublicada.name= document.querySelector('[name="imagen"]').value;

        this.options.addedfile.call(this, imagenpublicada);
        this.options.thumbnail.call(this, imagenpublicada, `/uploads/${imagenpublicada.name}`);

        imagenpublicada.previewElement.classList.add('dz-success','dz-complete');
      }
    },
});
//});

/*dropzone.on('sending', function(file,xhr,formData){
  console.log(formData);
});*/

dropzone.on('success', function(file,response){
    document.querySelector('[name="imagen"]').value = response.imagen;
  });
/*dropzone.on('error', function(file,message){
    console.log(message); 
});*/
dropzone.on('removedfile', function(){
  document.querySelector('[name="imagen"]').value = '';
});

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */





/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */


