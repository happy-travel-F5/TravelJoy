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

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="submit-button">
                                    {{ __('Aceptar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
