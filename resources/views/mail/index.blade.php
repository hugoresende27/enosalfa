

@extends('layouts.app')

@section('content')
  


<div class="container" style="margin:20px">

  <h1 class="text-white text-center display-4 minha-tag"
      style="background-color: darkgreen; 
      padding:10px; border-radius:5px"
  >SERVIÇO DE EMAIL</h1>

     {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
 @if (session()->has('message'))
 <div class="text-white" id='hideMe'>
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif


{{-- <a href="template" class="btn-voltar">testes</a> --}}


<div class="mb-6">

    <form action="emailsend" method="POST">
        @csrf
        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
            for="meuMail">
        Seu email
        </label>
        <input class="w-full p-2 border border-gray-400 rounded"
            type="mail"
            id="meuMail"
            name="mail"
            value=""
            required>

            <button class="btn-inicial meuBtn" style="color:#fff" type="submit">Enviar</button>
           
        </form>
</div>


<div class="mail-btn">
    <a href="/" class="btn-inicial meuBtn" style="background-color: red">Voltar</a>
</div>





