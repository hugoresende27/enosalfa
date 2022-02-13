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
    <a href="/alunos" class="btn-inicial" style="background-color: red">Voltar</a>

  {{-- DEBUG DE ERROS NO FORM-------------------- --}}
  @if ($errors->any())
  <div class=" text-white">
      <ul>
          @foreach ($errors->all() as $erro)
              <li class="">
                  {{ $erro }}                   
              </li>                 
          @endforeach
      </ul>
  </div>       
@endif
    


        <h1 class="text-center text-uppercase" style="font-family: 'Consolas'; color:rgb(105, 236, 253);font-size:5rem;">Registar um aluno</h1>

        {!! Form::open(['route' => 'guardar_aluno', 'method'=> 'POST']) !!}

            <div class="form-group display-4 text-center">
                {{ Form::label('nome','Nome') }}
                {{ Form::text('nome','', ['class'=>'form-control m-3','placeholder'=>'Primeiro e Ultimo Nome']) }}
                {{ Form::label('turma','Turma') }}
                {{ Form::text('turma','', ['class'=>'form-control m-3','placeholder'=>'Turma']) }}
                {{ Form::label('sala','Sala') }}
                {{ Form::text('sala','', ['class'=>'form-control m-3','placeholder'=>'Sala']) }}
                <p class="text-white" style="font-size: 20pt">1 &rAarr; PHP 2 &rAarr;JAVA 3 &rAarr;C/C++ 4 &rAarr;JavaScript 5 &rAarr;HTML/CSS 5 &rAarr;PYTHON</p>
                {{-- {{ Form::label('curso','Curso') }} --}}
                {{ Form::text('curso','', ['class'=>'form-control m-3','placeholder'=>'Curso']) }}
            
                {{ Form::submit('Registar', ['class'=>'btn btn-primary w-100 m-3 p-3 meuBtn']) }}

            </div>
        {!! Form::close() !!}

@endsection