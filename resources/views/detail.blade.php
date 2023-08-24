@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <img src="{{ $destination->image }}" class="card-img-top" alt="{{ $destination->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $destination->title }}</h5>
                <p class="card-text"><strong>Localización:</strong> {{ $destination->location }}</p>
                <p class="card-text"><strong>Motivo para viajar:</strong> {{ $destination->reason }}</p>
                <a href="{{ route('destinations.edit', ['id' => $destination->id]) }}" class="btn btn-primary">Editar</a>
                <form action="{{ route('destinations.destroy', ['id' => $destination->id]) }}" method="POST" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
