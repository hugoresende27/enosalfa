@extends('layouts.app')
{{-- @include('layouts.footer') --}}
@section('content')

<style>

    .meuBtn{
        font-weight: 900;
        font-family: 'Consolas',sans-serif;
        font-size: 1rem;
        border: none;
    }
    .meuBtn:hover{
        background-color: darkgreen;
        color: #000;
        border: none;
        transform: scale(1);
        font-size: 1.2rem;
    }
    label{
        color:#fff;
    }

    </style>


<div class="container p-3" style="margin:20px">
    <a href="/disciplinas" class="btn-voltar" style="background-color: red">Voltar</a>


        <h1 class="text-center text-uppercase" style="font-family: 'Consolas'; color:#fff;font-size:5rem;">Registar uma Disciplina</h1>

        {!! Form::open(['route' => 'guardar_disci', 'method'=> 'POST']) !!}

            <div class="form-group display-6 text-center">
                
                {{ Form::text('nome','', ['class'=>'form-control m-3','placeholder'=>'Nome da disciplina','required'=>'required']) }}
          
                {{ Form::submit('Registar', ['class'=>'btn btn-primary w-100 m-3 p-3 meuBtn']) }}

            </div>
        {!! Form::close() !!}

@endsection