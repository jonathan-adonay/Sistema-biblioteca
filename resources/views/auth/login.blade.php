@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

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
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco con algo de transparencia */
        border-radius: 15px; /* Bordes redondeados */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Sombra suave */
    }

    .card-header {
        background-color: #007bff; /* Color del encabezado */
        color: #fff; /* Color del texto del encabezado */
        font-size: 1.5rem; /* Tamaño de fuente más grande */
        border-top-left-radius: 15px; /* Bordes redondeados en la parte superior izquierda */
        border-top-right-radius: 15px; /* Bordes redondeados en la parte superior derecha */
    }

    .btn-primary {
        background-color: #007bff; /* Color del botón */
        border: none; /* Sin borde */
        transition: background-color 0.3s ease; /* Transición suave */
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Color del botón al pasar el ratón */
    }

    .form-control {
        border-radius: 10px; /* Bordes redondeados para los campos de entrada */
    }

    .form-check-input {
        width: 1.25rem; /* Tamaño del checkbox */
        height: 1.25rem; /* Tamaño del checkbox */
    }

    .form-check-label {
        margin-left: 0.5rem; /* Espacio entre el checkbox y la etiqueta */
    }
</style>
@endsection

