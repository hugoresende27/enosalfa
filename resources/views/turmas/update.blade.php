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


        <h1 class="text-center text-uppercase" style="font-family: 'Consolas'; color:#fff;font-size:2.5rem;">Editar uma Turma</h1>
        @if (Auth::user()->role >2)


        <form action="/turmas/{{ $turma->id }}" method="POST" class="form-update">
            {{-- {{ dd(get_defined_vars()) }} --}}
            @method('PUT')
            @csrf

            <label for="cursos" class="m-3 p-3">Cursos</label>  
            <select name="curso_escolhido" id="disciplinas" class="m-3 p-3">
   
                    @foreach($cursos as $c)
                        <option selected="" value="{{ $c->id }}">{{ $c->nome }}</option>
                    @endforeach

                
            </select><br>

            <label for="cursos" class="m-3 p-3">Salas</label>  
            <select name="sala_escolhida" id="disciplinas" class="m-3 p-3">
   
                    @foreach($salas as $s)
                        <option selected="" value="{{ $s->id }}">{{ $s->nome }}</option>
                    @endforeach

                
            </select><br>



                
            <button type="submit" 
            class="btn btn-primary w-75 m-3 p-3 meuBtn">
        Atualizar
    </button>

</form>

        
        {{-- {!! Form::open(['route' => 'guardar_turma', 'method'=> 'POST']) !!}

            <div class="display-6 text-center">           
              
                <label for="curso" class="m-3 p-3">Escolha o Curso</label>    
                {{  Form::select('curso_escolhido', $cursos,null,['class'=>' m-3','required'=>'required']); }}


                <label for="sala" class="m-3 p-3">Escolha a Sala</label>
                {{  Form::select('sala_escolhida', $salas,null,['class'=>' m-3','required'=>'required']); }}
            
                {{ Form::submit('Atualizar', ['class'=>'btn btn-primary w-100 m-3 p-3 meuBtn']) }}
             
            </div>

        {!! Form::close() !!} --}}

       
        @else
            
        <h1 class="text-center text-uppercase" style="background-color:red; font-family: 'Consolas'; color:#fff;font-size:5rem;">ACESSO VEDADO</h1>
        @endif   
@endsection