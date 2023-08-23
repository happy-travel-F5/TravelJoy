@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/create.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="create-container"> 
    <h2 class="create-title">Crear Destino</h2>
        <div class="red-line"></div>
        <form class="create-form" action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container-left">
            <label class="create-label" for="title">Título:</label>
            <input class="create-input" type="text" id="title" name="title" required placeholder="Escribe el titulo de tu destino">
            <label class="create-label" for="location">Ubicación:</label>
            <input class="create-input" type="text" id="location" name="location" required placeholder="Escribe la ubicación de tu destino">
            <label class="create-label" for="imageInput">Selecciona imágenes:</label>
            <div id="imageDropArea" contenteditable="true" class="image-drop-area">
    Sube una imagen
</div>
<input class="create-input" type="file" id="imageInput" accept="image/*" multiple style="display: none;" name="image">
<button class="create-button-submit" type=submit>Aceptar</button>
<a class="cancel-button" href="{{ url('/') }}">Cancelar</a>
        </div>       
<div class="container-rigth">
         <label class="create-label" for="reason">¿Por qué quieres viajar allí?</label>
            <textarea class="create-input" id="reason" name="reason" rows="4" required></textarea>
         </div>  


           
        </form>
    </div>
@endsection


@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const imageDropArea = document.getElementById("imageDropArea");
        const imageInput = document.getElementById("imageInput");

        // Escuchar el evento de arrastre sobre la zona de caída
        imageDropArea.addEventListener("dragover", function (e) {
            e.preventDefault(); // Prevenir el comportamiento predeterminado del navegador
            this.classList.add("dragover"); // Cambiar el estilo visual para indicar que es posible soltar aquí
        });

        // Escuchar el evento de soltar sobre la zona de caída
        imageDropArea.addEventListener("drop", function (e) {
            e.preventDefault(); // Prevenir el comportamiento predeterminado del navegador
            this.classList.remove("dragover"); // Restaurar el estilo visual
            const file = e.dataTransfer.files[0]; // Obtener el archivo de la acción de arrastre y soltar
            imageInput.files = new DataTransfer().files; // Limpiar los archivos en el input (si los hubiera)
            imageInput.files.add(file); // Agregar el archivo al input
        });

        // Escuchar el evento de salida del arrastre de la zona de caída
        imageDropArea.addEventListener("dragleave", function () {
            this.classList.remove("dragover"); // Restaurar el estilo visual
        });
    });
</script>
@endsection