@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/destinations.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="destinations-grid">
    @foreach ($destinations as $destination)
        <div class="destinations-container">
            <a href="{{ route('destinations.show', ['id' => $destination->id]) }}"> <!-- Enlace a la vista de detalles -->
                <img class="destinations-img" src="{{ $destination->image }}" alt="{{ $destination->title }}">
            </a>
            <div class="destinations-info">
                <div class="destinations-title">{{ $destination->title }}</div>
                <div class="destinations-location">{{ $destination->location }}</div>
            </div>

            @auth
                <!-- Mostrar botones de editar y eliminar solo si el usuario es el propietario del destino -->
                @if ($destination->user_id == auth()->id())
                    <button type="button" class="button-info">
                        <img src="{{ asset('images/Info-icon.svg') }}" width="33" alt="Icono de información">
                    </button>
                    <div class="edit-buttons">
                        <a href="{{ route('destinations.edit', ['id' => $destination->id]) }}"> <img src="{{ asset('images/Edit-icon.svg') }}" alt="Icono de editar" width="20"></a>
                        <form action="{{ route('destinations.destroy', ['id' => $destination->id]) }}" method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button-edit">
                                <img src="{{ asset('images/Delete-icon.svg') }}" width="18" alt="Eliminar" class="button-icon">
                            </button>
                        </form>
                    </div>
                @endif
            @endauth
        </div>
    @endforeach
</div>
@endsection
