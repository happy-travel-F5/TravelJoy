@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/create.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="create-container">
        <div class="card">
            <div class="card-body">
                <h2 class="create-title">Editar Destino</h2>
                <div class="red-line"></div>

                <form class="create-form" action="{{ route('destinations.update', ['id' => $destination->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="container-left">
                        <label class="create-label" for="title">Título:</label>
                        <input class="create-input" type="text" id="title" name="title" value="{{ $destination->title }}" required>

                        <label class="create-label" for="location">Ubicación:</label>
                        <input class="create-input" type="text" id="location" name="location" value="{{ $destination->location }}" required>

                        <label class="create-label" for="image">Seleccionar imágenes:</label>
                        <input class="create-input" type="text" id="image" name="image">

                        
                        <button class="create-button-submit" type="submit" class="btn btn-primary">Guardar Cambios</button>
                        <a class="cancel-button" href="{{ route('destinations') }}">Cancelar</a>
                    </div>

                    <div class="container-right">
                <!-- Motivo para viajar -->
                         <label class="create-label" for="reason">¿Por qué quieres viajar allí?</label>
                        <textarea class="create-input" id="reason" name="reason" rows="4" required>{{ $destination->reason }}</textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        @if(session('success'))
            alert("{{ session('success') }}");
            window.location.href = "{{ route('destinations') }}";
        @endif
    </script>
    
@endsection
