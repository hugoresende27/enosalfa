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
    <div class="card-header">{!! $aluno_nome !!}</div>
      <div class="card-body">
        <h5 class="card-title">Curso:


{{ dd(get_defined_vars()) ; }}
     

        </h5>
        <h5 class="card-title"> 

          @foreach ($tudo as $item)

            {{ $item->idade }} &rAarr; {{ $x }} anos de idade
        @endforeach  

        </h5>
        <h5 class="card-title">Morada: 

          @foreach ($tudo as $item)
            {{ $item->nome }}
        @endforeach  

        </h5>
        <h5 class="card-title">

          @foreach ($tudo as $item)
            {{ $item->email }}
        @endforeach  

        </h5>
        <h5 class="card-title">Telefone: 

          @foreach ($tudo as $item)
            {{ $item->telefone }}
        @endforeach  

        </h5>
        <h5 class="card-title">Turma: 

          @foreach ($tudo as $item)
            {{ $item->turma }}
        @endforeach  

        </h5>
        <h5 class="card-title">Sala: 

          @foreach ($tudo as $item)
            {{ $item->sala }}
        @endforeach  

        </h5>
        <h5 class="card-title">Registado em: 

          @foreach ($tudo as $item)
            {{ $item->created_at }}
        @endforeach  

        </h5>
      
      </div>
  </div>

  <div class="text-center">
    <a href="/alunos" class="btn-inicial" style="background-color: red">Voltar</a>
</div>
 
 
</div>

  
  
       
       
   

@endsection