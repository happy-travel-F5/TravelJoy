@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/create.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="create-container"> 
        <h2 class="create-title">Crear Destino</h2>
        <div class="red-line"></div>

        <form class="create-form" action="{{ route('destinations.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container-left">
                <!-- Título -->
                <label class="create-label" for="title">Título:</label>
                <input class="create-input" type="text" id="title" name="title" required placeholder="Escribe el título de tu destino">

                <!-- Ubicación -->
                <label class="create-label" for="location">Ubicación:</label>
                <input class="create-input" type="text" id="location" name="location" required placeholder="Escribe la ubicación de tu destino">

                <!-- Imágenes -->
                <label class="create-label" for="image">Seleccionar imágenes:</label>
                <input class="create-input" type="text" id="image" name="image">

                <!-- Botones -->
                <div class="button-container">
                    <button class="create-button-submit" type="submit">Aceptar</button>
                    <a class="cancel-button" href="{{ route('destinations') }}">Cancelar</a>
                </div>
            </div>

            <div class="container-right">
                <!-- Motivo para viajar -->
                <label class="create-label" for="reason">¿Por qué quieres viajar allí?</label>
                <textarea class="create-input" id="reason" name="reason" rows="4" required></textarea>
            </div>
        </form>
    </div>
@endsection


