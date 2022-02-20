@extends('layouts.app')

@section('content')


<div class="container p-3" style="margin:20px">
    <a href="/alunos" class="btn-voltar" style="background-color: red">Voltar</a>

  {{-- DEBUG DE ERROS NO FORM-------------------- --}}
  @if ($errors->any())
  <div class="mostrar-erros text-white">
      <ul>
          @foreach ($errors->all() as $erro)
              <li class="">
                  {{ $erro }}                   
              </li>                 
          @endforeach
      </ul>
  </div>       
@endif
          
@if (Auth::user()->role >2)


        <h1 class="text-center text-uppercase" style="font-family: 'Consolas'; color:#fff;font-size:5rem;">Registar um aluno</h1>

        {!! Form::open(['route' => 'guardar_aluno', 'method'=> 'POST']) !!}

            <div class="form-group display-6 ">
              
                {{ Form::text('nome','', ['class'=>'form-control m-3','placeholder'=>'Primeiro e Ultimo Nome']) }}

                {{ Form::label('morada','Morada') }}
                {{ Form::text('morada','', ['class'=>'form-control m-3','placeholder'=>'A sua morada']) }}

                {{ Form::label('email','Email') }}
                {{ Form::email('email','', ['class'=>'form-control m-3','placeholder'=>'o seu email']) }}

                {{ Form::label('telefone','Telefone') }}
                {{ Form::text('telefone','', ['class'=>'form-control m-3','placeholder'=>'o seu contacto']) }}

                <label for="data" class="m-3">Data de Nascimento</label><br>
                <input type="date" name="data_nascimento" id="data" max="2005-12-31" required value="{{ old('data_nascimento') }}"><br>

                <br>

                {{ Form::label('sala','Sala') }}
                {{ Form::text('sala','', ['class'=>'form-control m-3','placeholder'=>'Sala']) }}

          

                {{ Form::label('curso','Curso',['class'=>' m-3']) }}<br>
                {{  Form::select('curso', $cursos,null); }}<br>

            
                {{ Form::submit('Registar', ['class'=>'btn btn-primary w-100 m-3 p-3 meuBtn']) }}

            </div>
        {!! Form::close() !!}

        @else
            
        <h1 class="text-center text-uppercase" style="background-color:red; font-family: 'Consolas'; color:#fff;font-size:5rem;">ACESSO VEDADO</h1>
        @endif  
        

@endsection