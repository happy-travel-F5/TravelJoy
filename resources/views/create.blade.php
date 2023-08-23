@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear Destino</h2>
        <form action="{{ route('destinations.store') }}" method="POST">
            @csrf
            <label for="title">Título:</label>
            <input type="text" id="title" name="title" required>
            <label for="location">Localización:</label>
            <input type="text" id="location" name="location" required>
            <label for="reason">¿Por qué quieres viajar allí?</label>
            <textarea id="reason" name="reason" rows="4" required></textarea>
            <button type="submit">Aceptar</button>
            <a href="{{ route('destination.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
