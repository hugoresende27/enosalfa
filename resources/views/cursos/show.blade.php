@extends('layouts.app')

@section('content')
<style>


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

<a href="{{ url()->previous() }}" class="btn-voltar" style="background-color: red">Voltar</a>

    <h1 class="text-white text-center display-4"> Ficha Técnica do Curso</h1>
    <div class="card bg-light mb-3" style="max-width: ">

      <div class="card-header display-4">
     
        {!! $curso !!} 

        <a href="../cursos/{{ $id }}/edit" class="float-right btn-editar">EDITAR</a>


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

            {{-- @foreach ($turmas as $turma) --}}

               {{-- @if ($turma->id_turma == $aluno->id_turma) --}}

                {{-- <div class="lista-alunos-curso text-white"> --}}
                  {{-- <a href="/turmas/{{ $turma->id_turma }}">{{ $turma->id->id_turma }}</a>  --}}
                  {{-- {{ $turma->id_turma }} --}}
                {{-- </div> --}}
      
                  
              {{-- @endif  --}}

            {{-- {{ dd(get_defined_vars()) }} --}}
       
            {{-- @endforeach --}}
 
          </h5>

    
        
  
  
        
        </div>
    </div>


  
    
</div> 
@endsection