@extends('layouts.app')
{{-- @include('layouts.footer') --}}
@section('content')

<style>

  

    </style>


<div class="container p-3" style="margin:20px">
   

      {{-- DEBUG DE ERROS NO FORM-------------------- --}}
  @if ($errors->any())
  <div class=" text-white mostrar-erros">
      <ul>
          @foreach ($errors->all() as $erro)
              <li class="">
                  {{ $erro }}                   
              </li>                 
          @endforeach
      </ul>
  </div>       
@endif


        <h1 class="text-center text-uppercase" style="font-family: 'Consolas'; color:#fff;font-size:5rem;">Editar Curso {{ $curso->nome }}</h1>

        @if (Auth::user()->role >2)
        <form action="/cursos/{{ $curso->id }}" method="POST" class="text-center">
            @method('PUT')
            @csrf

            <div class="form-group  p-3" >

                
                
               <div class="mb-6 w-100">
                 
                   <input  class="m-3 p-3 " 
                          type="text"
                          id="curso"
                          name="nome"
                          value="{{ $curso->nome }}"
                          >
                </div>

              

               {{-- BOTÃO SUBMIT-------------------- --}}
             <div class=" m-3">
                <button type="submit"
                class="btn btn-primary w-75 m-3 p-3 meuBtn">
                    Atualizar
    
                </button>
            </div>
            
            </div>
        </form> 
        @else
            
        <h1 class="text-center text-uppercase" style="background-color:red; font-family: 'Consolas'; color:#fff;font-size:5rem;">ACESSO VEDADO</h1>
        @endif  

@endsection