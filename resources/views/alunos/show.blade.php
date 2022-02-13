@extends('layouts.app')

@section('content')

<div class="container p-3" style="margin:20px">

  <h1 class="text-white text-center display-4">
    {!! $aluno !!}
  </h1>

   {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
 @if (session()->has('message'))
 <div class="text-white">
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif
    <a href="/alunos" class="btn-inicial" style="background-color: red">Voltar</a>
  
    <h1 class="text-white text-center display-4">
        Curso a frequentar</h1>
        
      
        <p class="text-white text-center">{{ $curso }}</p>
       
   
</div> 
@endsection