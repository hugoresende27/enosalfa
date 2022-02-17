@extends('layouts.app')

@section('content')

<style>

    .meuBtn{
        font-weight: 900;
        font-family: 'Consolas',sans-serif;
        font-size: 1.5rem;
        border: none;
    }
    .meuBtn:hover{
        background-color: darkgreen;
        color: #000;
        border: none;
        transform: scale(1);
        font-size: 1.2rem;
    }
    .minha-label{
        color:#fff;
        background-color: rgb(11, 31, 2);
        border-radius: 3px;
        padding: 3px;
        margin: 3px;
        font-size:1.2rem;
    }
    .input-select{
        /* margin: 10px; */
        text-align: center;
        align-content: center;
        display: flex;          /*coloca tudo em linha*/
        flex-direction: column; /*coloca tudo em coluna*/
        align-items: center;    /*alinha horizontalmente*/
    }

    </style>


<div class=" p-3" style="margin:20px">
    {{-- <a href="/turmas" class="btn-voltar" style="background-color: red">Voltar</a> --}}

         {{-- DEBUG DE ERROS NO FORM-------------------- --}}
  @if ($errors->any())
  <div class=" text-white mostrar-erros">
      <ul>
          @foreach ($errors->all() as $erro)
              <li class="">
                  {{ $erro }}                   
              </li>                 
          @endforeach
      </ul>
  </div>       
@endif 


        <h1 class="text-center text-uppercase" style="font-family: 'Consolas'; color:#fff;font-size:2.5rem;">Adicionar uma Turma</h1>

        {!! Form::open(['route' => 'guardar_turma', 'method'=> 'POST']) !!}

            <div class="display-6 text-center">
              
               
                {{-- {{ Form::label('curso','Escolha o Curso', ['class'=>'m-3 minha-label']) }} --}}
                <label for="curso" class="m-3 p-3">Escolha o Curso</label>
                {{-- {{  Form::select('curso_escolhido', $todos_os_cursos,null,['class'=>' input-select m-3','placeholder'=>'Curso','required'=>'required']); }} --}}
                {{-- {{ Form::text('disciplina','', ['class'=>'form-control m-3','placeholder'=>'disciplina']) }} --}}

                {{  Form::select('curso_escolhido', $todos_os_cursos,null,['class'=>' m-3']); }}
            
                {{ Form::submit('Registar', ['class'=>'btn btn-primary w-100 m-3 p-3 meuBtn']) }}

            </div>
        {!! Form::close() !!}

@endsection