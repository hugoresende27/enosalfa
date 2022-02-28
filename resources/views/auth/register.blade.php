@extends('layouts.app')

@section('content')


<style>

    label{
        color:#000;
        background-color: #fff;
        }
</style>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">

                  
                        
                        
                        <h5 class="card-title" style="text-align: center;font-size:1.2rem">
                            {{ __('REGISTO DE NOVO USER') }}
                        </h5>
                    </div>

                    <div class="card-body">
                        {{-- @if (isset(Auth::user()->role) && Auth::user()->role == 3) --}}
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Tipo de User</label>

                                <select class="col-md-6" name="role">
                                    <option value="1">Aluno</option>
                                    <option value="2">Professor</option>
                                    {{-- <option value="3">Administrador</option> --}}
                                
                                </select>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">

                                    <button class="btn meuBtn btn-primary" style="background-color: blue" > <a href="/">Voltar</a>
                                    </button>

                                    <button type="submit" class="meuBtn btn btn-primary" style="background-color: green">
                                        {{ __('Registar') }}
                                    </button>
                                {{-- {{ dd(get_defined_vars()) }} --}}
                                </div>
                            </div>
                        </form>
                        {{-- @else
                        <h1 class="text-center text-uppercase" style="background-color:red; font-family: 'Consolas'; color:#fff;font-size:5rem;">ACESSO VEDADO</h1>
                        @endif   --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
