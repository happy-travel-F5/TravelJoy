@extends('layouts.app')

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

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="email" class="custom-form-label">{{ __('E-Mail') }}</label>

                            <div class="input-container">
                                <input id="email" type="email" class="custom-form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Escribe tu email...">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password" class="custom-form-label">{{ __('Password') }}</label>

                            <div class="input-container">
                                <input id="password" type="password" class="custom-form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Escribe tu contraseña...">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

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

                                <div><p>¿Ya tienes una cuenta? Accede</p><a href="">Aquí</a></div>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

