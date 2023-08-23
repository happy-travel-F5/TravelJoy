@extends('layouts.app')

<<<<<<< Updated upstream
@section('styles')
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="custom-container">
    
            <div class="custom-card">
                <div class="custom-form-header">{{ __('Acceso de usuario') }}</div>
                <div class="red-line"></div>

                <div class="custom-form-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="custom-form">
                            <label for="email" class="custom-form-label">{{ __('Email Address') }}</label>

                            <div class="input-container">
                                <input id="email" type="email" class="custom-form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Escribe tu email...">
=======
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
>>>>>>> Stashed changes

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<<<<<<< Updated upstream
                        <div class="input-container">
                            <label for="password" class="custom-form-label">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="custom-form-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Escribe tu contraseña...">
=======
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
>>>>>>> Stashed changes

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<<<<<<< Updated upstream
                       
                            
                        </div>

                        <div class="custom-button-submit">
                            <div>
                                <button type="submit" class="submit-button">
                                    {{ __('Aceptar') }}
                                </button>
                                <a class="cancel-button" href="{{ url('/') }}">Cancelar</a>

                               
=======
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
>>>>>>> Stashed changes
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
