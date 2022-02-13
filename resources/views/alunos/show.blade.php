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
        Cursos a frequentar</h1>
        @foreach ($cursos as $item)

        <p class="text-white text-center">{{ $item->nome }}</p>
       
   @endforeach
</div> 
@endsection