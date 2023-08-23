@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Destino</h2>
        <form action="{{ route('destinos.update', ['destino' => $destino->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Título:</label>
            <input type="text" id="title" name="title" value="{{ $destination->title }}" required>
            <label for="location">Localización:</label>
            <input type="text" id="location" name="location" value="{{ $destination->location }}" required>
            <label for="reason">Motivo para Viajar:</label>
            <textarea id="reason" name="reason" rows="4" required>{{ $destino->motivo }}</textarea>
            <button type="submit">Actualizar Destino</button>
        </form>
    </div>
@endsection
