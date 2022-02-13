@extends('layouts.app')

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
    <a href="/professores" class="btn-inicial" style="background-color: red">Voltar</a>

    


        <h1 class="text-center text-uppercase" style="font-family: 'Consolas'; color:rgb(105, 236, 253);font-size:5rem;">Registar um Professor</h1>

        {!! Form::open(['route' => 'guardar_prof', 'method'=> 'POST']) !!}

            <div class="form-group display-4 text-center">
                {{ Form::label('nome','Nome') }}
                {{ Form::text('nome','', ['class'=>'form-control m-3','placeholder'=>'Primeiro e Ultimo Nome']) }}
                {{ Form::label('disciplina','Disciplina') }}
                {{ Form::text('disciplina','', ['class'=>'form-control m-3','placeholder'=>'Disciplina']) }}
               
            
                {{ Form::submit('Registar', ['class'=>'btn btn-primary w-100 m-3 p-3 meuBtn']) }}

            </div>
        {!! Form::close() !!}

@endsection