@extends('layouts.app')

@section('content')
<style>


td a {
  width: 100%;
  display: block;
}



</style>

<div class="container p-3" style="margin:20px">

  <h1 class="text-white text-center display-4">TURMAS</h1>
   {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
 @if (session()->has('message'))
 <div class="text-white">
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif


    {{-- <a href="/" class="btn-voltar" style="background-color: red">Voltar</a> --}}
    @if (Auth::user()->role >2)
      <a href="/turmas/create" class="btn-adicionar" style="background-color: green">Adicionar</a>
    @endif

    <div class="table-responsive">

    <table class=" table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Turma</th>
            <th scope="col">Sala</th>
            
            {{-- <th scope="col">Curso</th> --}}
          
            
            {{-- <th scope="col">EDITAR</th> --}}
            <th scope="col">APAGAR</th>
          </tr>
        </thead>
        <tbody>
         
          @foreach ($todas_as_turmas as $turma)
        
        
          <tr>
            
            
            <td class="especial-id-turma"> 
              
              
              <a href="/turmas/{{ $turma->id }}" class="especial-link-turma">  {{ $turma->id }} 
              
              </a>

            </td>
            
            <td class=""> 
              
              
                {{ $sala }} 
              
              

            </td>
          
           
            @if (Auth::user()->role >2)
    
              <td>
                  
                  <form action="/turmas/{{ $turma->id }}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit"
                              class="border-b-2  border-dotted italic text-black"
                              > Apagar </button>
      
                  </form>
      
              </td>

            @endif
            
          </tr>
          @endforeach
      
        </tbody>
      </table>

    </div>
    </div>    
    
@endsection