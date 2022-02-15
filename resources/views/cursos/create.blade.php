@extends('layouts.app')
{{-- @include('layouts.footer') --}}
@section('content')

<style>

  

    </style>


<div class="container p-3" style="margin:20px">
    <a href="/cursos" class="btn-voltar" style="background-color: red">Voltar</a>

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


        <h1 class="text-center text-uppercase" style="font-family: 'Consolas'; color:#fff;font-size:5rem;">Registar um Curso</h1>

        {!! Form::open(['route' => 'guardar_curso', 'method'=> 'POST']) !!}

            <div class="form-group display-6 text-center">
                {{ Form::label('nome','Nome') }}
                {{ Form::text('nome','', ['class'=>'form-control m-3','placeholder'=>'Nome do curso']) }}

               
               
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
            {{-- <div class=" m-3">
                <button type="submit"
                        class="btn btn-primary">
                    Criar
    
                </button>
            </div> --}}
            
            </div>
        </form> 

@endsection