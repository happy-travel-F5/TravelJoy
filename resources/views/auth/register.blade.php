@extends('layouts.app')

<<<<<<< Updated upstream
@section('styles')
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="custom-container">
   
            <div class="custom-card">
                <div class="custom-form-header">{{ __('Registro de usuario') }}</div>
                <div class="red-line"></div>

                <div class="custom-form-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="custom-form">
                            <label for="name" class="custom-form-label">{{ __('Nombre') }}</label>

                            <div class="input-container" >
                                <input id="name" type="text" class="custom-form-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Escribe tu nombre...">
=======
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
>>>>>>> Stashed changes

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<<<<<<< Updated upstream
                        <div>
                            <label for="email" class="custom-form-label">{{ __('E-Mail') }}</label>

                            <div class="input-container">
                                <input id="email" type="email" class="custom-form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Escribe tu email...">
=======
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
>>>>>>> Stashed changes

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<<<<<<< Updated upstream
                        <div>
                            <label for="password" class="custom-form-label">{{ __('Password') }}</label>

                            <div class="input-container">
                                <input id="password" type="password" class="custom-form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Escribe tu contraseña...">
=======
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
>>>>>>> Stashed changes

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<<<<<<< Updated upstream
                        <div>
                            <label for="password-confirm" class="custom-form-label">{{ __('Confirm Password') }}</label>

                            <div class="input-container">
                                <input id="password-confirm" type="password" class="custom-form-input" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="custom-button-submit">
                            <div>
                                <button type="submit" class="submit-button">
                                    {{ __('Aceptar') }}
                                </button>
                                <a class="cancel-button" href="{{ url('/') }}">Cancelar</a>
                                

                                <div><p>¿Ya tienes una cuenta? Accede</p><a href="{{ route('login') }}">Aquí</a></div>
                                

=======
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
