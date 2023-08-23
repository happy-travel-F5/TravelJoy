@extends('layouts.app')

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

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-container">
                            <label for="password" class="custom-form-label">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="custom-form-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Escribe tu contraseña...">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       
                            
                        </div>

                        <div class="custom-button-submit">
                            <div>
                                <button type="submit" class="submit-button">
                                    {{ __('Aceptar') }}
                                </button>
                                <a class="cancel-button" href="{{ url('/') }}">Cancelar</a>

                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
