@extends('layouts.app')
{{-- @include('layouts.footer') --}}
@section('content')



<div class="container p-3" style="margin:20px">
    <a href="/cursos" class="btn-voltar" style="background-color: red">Voltar</a>

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


        <h1 class="text-center text-uppercase" style="font-family: 'Consolas'; color:#fff;font-size:5rem;">Registar um Curso</h1>
      
        @if (Auth::user()->role >2)

        {!! Form::open(['route' => 'guardar_curso', 'method'=> 'POST']) !!}

            <div class="form-group display-6 text-center">
                {{ Form::label('nome','Nome') }}
                {{ Form::text('nome','', ['class'=>'form-control m-3','placeholder'=>'Nome do curso']) }}

               
               
                {{ Form::submit('Registar', ['class'=>'btn btn-primary w-100 m-3 p-3 meuBtn']) }}

            </div>
        {!! Form::close() !!}

        @else
            
        <h1 class="text-center text-uppercase" style="background-color:red; font-family: 'Consolas'; color:#fff;font-size:5rem;">ACESSO VEDADO</h1>
        @endif  
            
            </div>
        </form> 

@endsection