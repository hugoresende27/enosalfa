@extends('layouts.app')

@section('content')

<div class="container p-3" style="margin:20px">

  <h1 class="text-white text-center display-4">
    {!! $curso !!}
  </h1>

   {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
 @if (session()->has('message'))
 <div class="text-white">
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif
    <a href="/cursos" class="btn-inicial" style="background-color: red">Voltar</a>


    <h1 class="text-white text-center display-4">
        Alunos a frequentar</h1>
        @foreach ($alunos as $item)

        <p class="text-white text-center">{{ $item->nome }}</p>
       
   @endforeach
</div> 
@endsection