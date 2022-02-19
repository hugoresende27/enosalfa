@extends('layouts.app')
{{-- @include('layouts.footer') --}}
@section('content')

<style>

    .meuBtn{
        font-weight: 900;
        font-family: 'Consolas',sans-serif;
        font-size: 1rem;
        border: none;
    }
    .meuBtn:hover{
        background-color: darkgreen;
        color: #000;
        border: none;
        transform: scale(1);
        font-size: 1.2rem;
    }
    label{
        color:#fff;
    }

    </style>


<div class="container p-3" style="margin:20px">
    @if (Auth::user()->role >2)
    <a href="/disciplinas" class="btn-voltar" style="background-color: red">Voltar</a>


        <h1 class="text-center text-uppercase" style="font-family: 'Consolas'; color:#fff;font-size:5rem;">Editar a Disciplina {{ $disciplina->nome }}</h1>

        <form action="/disciplinas/{{ $disciplina->id }}" method="POST" class="text-center">
            @method('PUT')
            @csrf

            <div class="form-group  p-3" >

                
                
               <div class="mb-6 w-100">
                 
                   <input  class="m-3 p-3 " 
                          type="text"
                          id="curso"
                          name="nome"
                          value="{{ $disciplina->nome }}"
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