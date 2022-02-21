@extends('layouts.app')

@section('content')

<div class="container p-3" style="margin:20px">

  <h1 class="text-white text-center display-4 tag-tit1">PROFESSORES</h1>
   {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
 @if (session()->has('message'))
 <div class="text-white">
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif


  
@if (Auth::user()->role >2)

    <a href="/professores/create" class="btn-adicionar float-left" style="background-color: green">Adicionar</a>

     @endif 

    <div class="table-responsive">

    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            {{-- <th scope="col">Email</th> --}}
            <th scope="col">Disciplina</th>
            
            
            
            
            <th scope="col" >GESTÃO</th>
            <th scope="col">EDITAR</th>
            <th scope="col">APAGAR</th>
          </tr>
        </thead>
        <tbody>
         
          @foreach ($profs as $item)
        
        
          <tr>
        
            <td> <a href="/professores/{{ $item->id }}"> {{ $item->nome }} </a> </td>
            {{-- <td>  {{ $item->email }} </td> --}}

            @foreach ($disciplinas as $disciplina)
              @if ($disciplina->id == $item->id_disciplina )
                <td>  {{ $disciplina->nome }} </td>
              @endif
                
            @endforeach
            
          
           
            @if (Auth::user()->role >2)
              <td><a href="/professores/{{ $item->id }}/profturmas">Atribuir Turmas </a></td>
              <td><a href="/professores/{{ $item->id }}/edit">Editar </a></td>
           
    
            <td>
                
                <form action="/professores/{{ $item->id  }}" method="POST">
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