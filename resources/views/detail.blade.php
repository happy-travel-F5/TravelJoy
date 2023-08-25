@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/detail.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="edit-container">
    <img src="{{ $destination->image }}" class="card-img-top" alt="{{ $destination->title }}">
    <div class="edit-body">

        <div class="edit-info-header">
            <div class="edit-info">
                <h5 class="edit-title">{{ $destination->title }}</h5>
                <p class="edit-text">{{ $destination->location }}</p>
            </div>

            @auth
                <!-- Mostrar botones de editar y eliminar solo si el usuario es el propietario del destino -->
                @if ($destination->user_id == auth()->id())
                <div class="edit-buttons">
                    <a href="{{ route('destinations.edit', ['id' => $destination->id]) }}">
                        <img src="{{ asset('images/Edit-icon.svg') }}" alt="Icono de editar" width="20">
                    </a>
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

        <p class="edit-reason"><strong>Motivo para viajar:</strong> {{ $destination->reason }}</p>
    </div>
</div>
@endsection
