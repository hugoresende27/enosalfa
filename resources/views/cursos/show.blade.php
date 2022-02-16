@extends('layouts.app')

@section('content')
<style>
  .minimo-altura{
    min-height: 70vh;
    /* background-color: yellow; */
  }

  .lista-alunos-curso{
    font-size:1.5rem;
    background-color:#000;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    padding: 5px;
    margin: 10px;
    border-radius: 5px;
    text-align: center;
    color: #fff;
  
  }

  </style>
<div class="container p-3 minimo-altura" style="margin:20px">

 

   {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
 @if (session()->has('message'))
 <div class="text-white">
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif
    <a href="/cursos" class="btn-voltar" style="background-color: red">Voltar</a>


    <div class="card bg-light mb-3" style="max-width: ">

      <div class="card-header display-4">
        {!! $curso !!}
      </div>
        <div class="card-body">

          <h5 class="card-title lista-alunos-curso">ID:
            {{ $id }}
 
          </h5>

          <h5 class="card-title">Alunos a frequentar:

            @foreach ($alunos as $aluno)

            
              <div class="lista-alunos-curso">
                <a href="/alunos/{{ $aluno->id }}">{{ $aluno->nome }}</a> 
              </div>
       
       
            @endforeach
 
          </h5>
        
          <h5 class="card-title">Turmas com este curso:

            @foreach ($turmas as $turma)

               {{-- @if ($turma->id_turma == $aluno->id_turma) --}}

                <div class="lista-alunos-curso text-white">
                  {{-- <a href="/turmas/{{ $turma->id_turma }}">{{ $turma->id->id_turma }}</a>  --}}
                  {{ $turma->id_turma }}
                </div>
      
                  
              {{-- @endif  --}}

            {{-- {{ dd(get_defined_vars()) }} --}}
       
            @endforeach
 
          </h5>

    
        
  
  
        
        </div>
    </div>


  
    
</div> 
@endsection