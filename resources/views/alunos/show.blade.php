@extends('layouts.app')

@section('content')

   {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
   @if (session()->has('message'))
   <div class="text-white">
       <p class="delete">
           {{ session()->get('message') }}
       </p>
   </div>
  @endif
      

<div class="container p-3" style="margin:20px">


  <h1 class="text-white text-center display-4">Ficha Técnica do aluno</h1>

  

  <div class="card bg-light mb-3" style="max-width: ">
    <div class="card-header display-4">{!! $aluno->nome !!}</div>
      <div class="card-body">
        <h5 class="card-title">Curso:

             {{ $curso->nome }}

     

        </h5>
        <h5 class="card-title">Idade:

            {{ $x }} anos, nascido em {{ $aluno->idade }}

     

        </h5>
        <h5 class="card-title"> 

      {{ $aluno->email }}

        </h5>
        <h5 class="card-title">Morada: 

          {{ $aluno->morada }}

        </h5>
        <h5 class="card-title">
 

        </h5>
        <h5 class="card-title">Telefone: 

       {{ $aluno->telefone }}

        </h5>
        <h5 class="card-title">Turma: 
          {{ $aluno->turma }}
     

        </h5>
        <h5 class="card-title">Sala: 

          {{ $aluno->sala }}
        </h5>
        <h5 class="card-title">Registado em: 

          {{ $aluno->created_at }}

        </h5>
      
      </div>
  </div>

  <div class="text-center">
 
    <a href="/alunos" class="btn-inicial" style="background-color: red">Voltar </a>
</div>
 
 
</div>

  
  
       
       
   

@endsection