@extends('layouts.app')
@include('layouts.footer')
@section('content')

<style>



    </style>


<div class="container p-3" style="margin:20px">
    <a href="/professores" class="btn-inicial" style="background-color: red">Voltar</a>

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
    


        <h1 class="text-center text-uppercase" style="font-family: 'Consolas'; color:rgb(105, 236, 253);font-size:5rem;">Registar um Professor</h1>

        {!! Form::open(['route' => 'guardar_prof', 'method'=> 'POST']) !!}

            <div class="form-group display-4 text-center">
                {{ Form::label('nome','Nome') }}
                {{ Form::text('nome','', ['class'=>'form-control m-3','placeholder'=>'Primeiro e Ultimo Nome']) }}
                {{ Form::label('disciplina','Disciplina') }}
              

                {{  Form::select('disciplinas', $disciplinas,null); }}
               
               
            
                {{ Form::submit('Registar', ['class'=>'btn btn-primary w-100 m-3 p-3 meuBtn']) }}

            </div>
        {!! Form::close() !!}

@endsection