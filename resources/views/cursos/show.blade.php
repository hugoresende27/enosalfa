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
    border-radius: 5px;
    width: 150px;
    position: relative;
    left: 50%;
    transform: translateX(-50%);
  }

  </style>
<div class="container p-3 minimo-altura" style="margin:20px">

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
    <a href="/cursos" class="btn-voltar" style="background-color: red">Voltar</a>


    <h1 class="text-white text-center display-4">
        Alunos a frequentar</h1>
        @foreach ($alunos as $item)

        <ul>
          <li class="lista-alunos-curso">
            <a href="/alunos/{{ $item->id }}">{{ $item->nome }}</a> 
          </li>
        </ul>
       
       
   @endforeach
</div> 
@endsection