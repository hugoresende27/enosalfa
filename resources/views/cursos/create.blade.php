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
    <a href="/cursos" class="btn-inicial" style="background-color: red">Voltar</a>

    


        <h1 class="text-center text-uppercase" style="font-family: 'Consolas'; color:rgb(105, 236, 253);font-size:5rem;">Registar um Curso</h1>

        {!! Form::open(['route' => 'guardar_curso', 'method'=> 'POST']) !!}

            <div class="form-group display-4 text-center">
                {{ Form::label('nome','Nome') }}
                {{ Form::text('nome','', ['class'=>'form-control m-3','placeholder'=>'Primeiro e Ultimo Nome']) }}

               
                {{ Form::label('disciplinas','Disciplinas') }}
                {{ Form::text('disciplinas','', ['class'=>'form-control m-3','placeholder'=>'Ex.: Português;Matemática;Ciências']) }}
            
                {{ Form::submit('Registar', ['class'=>'btn btn-primary w-100 m-3 p-3 meuBtn']) }}

            </div>
        {!! Form::close() !!}

        {{-- <form action="/cursos" method="POST">
            @csrf

            <div class="form-group text-white p-3" style="font-size:22pt">

                
                
               <div class="mb-6">
                   <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                          for="curso">
                       {{ __('curso') }}
                   </label>
                   <input class="w-full p-2 border border-gray-400 rounded"
                          type="text"
                          id="curso"
                          name="curso"
                          placeholder="Nome do curso"
                          required>
               </div>

               <div class="mb-6">
                   <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                          for="disciplinas">
                       {{ __('disciplinas') }}
                   </label>
                   <input class="w-full p-2 border border-gray-400 rounded"
                          type="text"
                          id="disciplinas"
                          name="disciplinas"
                          placeholder="Disciplinas do curso"
                          required>
               </div>

               {{-- BOTÃO SUBMIT-------------------- --}}
            <div class=" m-3">
                <button type="submit"
                        class="btn btn-primary">
                    Criar
    
                </button>
            </div>
            
            </div>
        </form> --}}

@endsection