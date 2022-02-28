

@extends('layouts.app')

@section('content')

<div class="container" style="margin:20px">

    <h1 class="text-white text-center display-4 minha-tag"
        style="background-color: darkgreen; 
        padding:10px; border-radius:5px"
    >Email enviado</h1>

     {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
 @if (session()->has('message'))
 <div class="text-white" id='hideMe'>
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif

<a href="{{ url()->previous() }}" class="btn-voltar" style="background-color: red">Voltar</a>





    
@endsection


