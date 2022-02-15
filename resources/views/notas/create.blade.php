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
    <a href="/notas" class="btn-voltar" style="background-color: red">Voltar</a>

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


        <h1 class="text-center text-uppercase" style="font-family: 'Consolas'; color:#fff;font-size:5rem;">Lançar uma nota</h1>

        {!! Form::open(['route' => 'guardar_notas', 'method'=> 'POST']) !!}

            <div class="display-6 text-center">
                {{-- {{ Form::label('aluno','aluno') }} --}}
                {{  Form::select('aluno', $aluno,null,['class'=>'input-select m-3','placeholder'=>'aluno','required'=>'required']); }}
                {{-- {{ Form::text('aluno','', ['class'=>'form-control m-3','placeholder'=>'aluno']) }} --}}
               
                {{-- {{ Form::label('disciplina','disciplina') }} --}}
                {{  Form::select('disciplina', $disciplina,null,['class'=>' input-select m-3','placeholder'=>'disciplina','required'=>'required']); }}
                {{-- {{ Form::text('disciplina','', ['class'=>'form-control m-3','placeholder'=>'disciplina']) }} --}}

                {{-- {{ Form::label('nota','nota') }} --}}
                {{ Form::text('nota','', ['class'=>'input-select m-3','placeholder'=>'Inserir Nota (0-20)']) }}
            
                {{ Form::submit('Registar', ['class'=>'btn btn-primary w-100 m-3 p-3 meuBtn']) }}

            </div>
        {!! Form::close() !!}

@endsection