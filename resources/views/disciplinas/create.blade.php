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
    <a href="/disciplinas" class="btn-inicial" style="background-color: red">Voltar</a>

    


        <h1 class="text-center text-uppercase" style="font-family: 'Consolas'; color:rgb(105, 236, 253);font-size:5rem;">Registar uma Disciplina</h1>

        {!! Form::open(['route' => 'guardar_disci', 'method'=> 'POST']) !!}

            <div class="form-group display-4 text-center">
                {{ Form::label('nome','Nome Disciplina') }}
                {{ Form::text('nome','', ['class'=>'form-control m-3','placeholder'=>'Nome da disciplina','required'=>'required']) }}
               
                {{ Form::label('prof','Professor') }}
                {{-- {{ Form::text('prof','', ['class'=>'form-control m-3','placeholder'=>'Professor']) }} --}}

             

                {{  Form::select('profs', $profs,null); }}
            
                {{ Form::submit('Registar', ['class'=>'btn btn-primary w-100 m-3 p-3 meuBtn']) }}

            </div>
        {!! Form::close() !!}

@endsection