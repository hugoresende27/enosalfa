@extends('layouts.app')

@section('content')

<style>

  

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

                {{ Form::label('morada','Morada') }}
                {{ Form::text('morada','', ['class'=>'form-control m-3','placeholder'=>'A sua morada']) }}

                {{ Form::label('email','Email') }}
                {{ Form::email('email','', ['class'=>'form-control m-3','placeholder'=>'o seu email']) }}

                {{ Form::label('telefone','Telefone') }}
                {{ Form::text('telefone','', ['class'=>'form-control m-3','placeholder'=>'o seu contacto']) }}

                {{ Form::label('turma','Turma') }}
                {{ Form::text('turma','', ['class'=>'form-control m-3','placeholder'=>'Turma']) }}

                {{ Form::label('sala','Sala') }}
                {{ Form::text('sala','', ['class'=>'form-control m-3','placeholder'=>'Sala']) }}

                <label for="data">Data de Nascimento</label><br>
                <input type="date" name="data_nascimento" id="data" max="2005-12-31" required><br>

               

                {{-- <p class="text-white" style="font-size: 20pt">{{ $cursos }}</p> --}}
                {{ Form::label('curso','Curso') }}


                {{ Form::text('curso','', ['class'=>'form-control m-3','placeholder'=>'Curso']) }}

                @foreach ($cursos as $key=>$row)
                   
                    
                        <p class="text-white" style="font-size:1.5rem; text-align:left;">  {{ $key }} &rAarr; {{ $row }} </p>
            
                @endforeach
            
                {{ Form::submit('Registar', ['class'=>'btn btn-primary w-100 m-3 p-3 meuBtn']) }}

            </div>
        {!! Form::close() !!}

        

@endsection