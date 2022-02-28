@extends('layouts.app')

@section('content')
<style>


  </style>
<div class="container p-3 minimo-altura" style="margin:20px">

 

   {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
 @if (session()->has('message'))
 <div class="text-white" id='hideMe'>
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif

<a href="{{ url()->previous() }}" class="btn-voltar" style="background-color: red">Voltar</a>

    <h1 class="text-white text-center display-4"> Ficha Técnica do Curso</h1>
    <div class="card bg-light mb-3 show-meu" style="max-width: ">

      <div class="card-header display-4">
     
        {!! $curso->nome !!} 

        {{-- <a href="../cursos/{{ $id }}/edit" class="float-right btn-editar">EDITAR</a> --}}


      </div>
        <div class="card-body">

          <h5 class="card-title lista-alunos-curso">ID:
            {{ $curso->id }}
 
          </h5>

    

          <h5 class="card-title">Disciplinas:

            @foreach ($arr_subjs as $sub)

            
              <div class="lista-alunos-curso">
                <a href="/disciplinas/{{ $sub->id }}">{{ $sub->nome }}</a> 
              </div>
       
       
            @endforeach
 
          </h5>

          <h5 class="card-title">Alunos a frequentar:

            @foreach ($alunos as $aluno)

            
              <div class="lista-alunos-curso">
                <a href="/alunos/{{ $aluno->id }}">{{ $aluno->nome }}</a> 
              </div>
       
       
            @endforeach
 
          </h5>
        
          <h5 class="card-title">Turmas com este curso:

            @foreach ($cursos_turma as $turma)

              

                <div class="lista-alunos-curso text-white">
                  <a href="/turmas/{{ $turma->id_turma }}">{{ $turma->id_turma }}</a> 
   
       
            @endforeach

         
 
          </h5>
          {{-- {{ dd(get_defined_vars()) }} --}}
    
        
  
  
        
        </div>
    </div>


  
    
</div> 
@endsection