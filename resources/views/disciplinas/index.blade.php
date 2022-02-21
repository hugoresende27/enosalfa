@extends('layouts.app')

@section('content')

<div class="container p-3" style="margin:20px">

  <h1 class="text-white text-center display-4 tag-tit1">DISCIPLINAS</h1>

     {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
 @if (session()->has('message'))
 <div class="text-white">
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif

@if (Auth::user()->role >2)
    {{-- <a href="/" class="btn-voltar" style="background-color: red">Voltar</a> --}}
    
    <a href="/disciplinas/create" class="btn-adicionar" style="background-color: green">Adicionar</a>
@endif

@if (Auth::user()->role > 1)
    <div class="table-responsive">


    <table class=" table table-striped table-dark">
        <thead>
          <tr>

            <th scope="col">ID Disciplina</th>
            <th scope="col">Nome da Disciplina</th>
            
             {{-- <th scope="col">Nome do professor</th> --}}
        
        
            <th scope="col">EDITAR</th>
            <th scope="col">APAGAR</th>
          </tr>
        </thead>
        <tbody>

          
          @foreach ($disc as $item)
 
          
          <tr>

            <td>{{ $item->id }}</td>

           
            <td> <a href="/disciplinas/{{ $item->id }} ">{{ $item->nome }}  </a> </td>

       
            @if (Auth::user()->role >2)
      
              <td><a href="/disciplinas/{{ $item->id }}/edit">Editar </a></td>
      
      
              <td>
                  
                  <form action="/disciplinas/{{ $item->id }}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit"
                              class="border-b-2  border-dotted italic"
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

    
    @endif

    @if (Auth::user()->role == 1)
            
      <h1 class="text-center text-uppercase" style="background-color:red; font-family: 'Consolas'; color:#fff;font-size:5rem;">ACESSO VEDADO</h1>
    @endif  
    
@endsection