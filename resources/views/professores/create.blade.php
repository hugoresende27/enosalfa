@extends('layouts.app')
{{-- @include('layouts.footer') --}}
@section('content')

<style>



    </style>


<div class="container p-3" style="margin:20px">
    <a href="/professores" class="btn-voltar" style="background-color: red">Voltar</a>

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
    


        <h1 class="text-center text-uppercase" style="font-family: 'Consolas'; color:#fff;font-size:5rem;">Registar um Professor</h1>

        {!! Form::open(['route' => 'guardar_prof', 'method'=> 'POST']) !!}

            <div class="form-group display-6 text-center">
                {{ Form::label('nome','Nome') }}
                {{ Form::text('nome','', ['class'=>'form-control m-3','placeholder'=>'Primeiro e Ultimo Nome']) }}
                {{ Form::label('disciplina','Disciplina') }}
                <br>

                {{  Form::select('disciplinas', $disciplinas,null,['class'=>' m-3']); }}
               
               
            
                {{ Form::submit('Registar', ['class'=>'btn btn-primary w-100 m-3 p-3 meuBtn']) }}

            </div>
        {!! Form::close() !!}

@endsection