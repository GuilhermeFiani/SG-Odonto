@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <hr class="col-md-12 m-5">
        <h1 class="h3 col-md-8 pb-5">Registre-se</h1>
        <div class="col-md-10">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row">
                    <label for="name" class="col-md-4 offset-md-2 col-form-label">{{ __('Nome de usuário') }}</label>
                </div>
                <div class="row">
                    <div class="col-md-8 offset-md-2 mb-3">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <label for="email" class="col-md-4 col-form-label offset-md-2">{{ __('Endereço de e-mail') }}</label>
                </div>
                <div class="row">
                    <div class="col-md-8 offset-md-2 mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3 offset-md-2 col-md-8">
                    <div class="col-md-6 p-1">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Senha">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-6 p-1">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme a sua senha">
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-8 offset-md-2">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Registrar') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
