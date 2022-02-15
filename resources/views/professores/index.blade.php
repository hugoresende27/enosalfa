@extends('layouts.app')

@section('content')

<div class="container p-3" style="margin:20px">

  <h1 class="text-white text-center display-4">PROFESSORES</h1>
   {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
 @if (session()->has('message'))
 <div class="text-white">
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif


    <a href="/" class="btn-inicial" style="background-color: red">Voltar</a>

    <a href="/professores/create" class="btn-inicial" style="background-color: green">Adicionar</a>

    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            
            <th scope="col">ID Disciplina</th>
            
            <th scope="col">EDITAR</th>
            <th scope="col">APAGAR</th>
          </tr>
        </thead>
        <tbody>
         
          @foreach ($profs as $item)
          {{-- @foreach($profs as $key=>$row) --}}
        
          <tr>
            <td>  {{ $item->nome }} </td>
            {{-- <td>  {{ $row['nome'] }} </td> --}}
         
            @foreach ($disciplina as $d)
                @if ($d->id == $item->id_disciplina)
                  <td> <a href="/disciplinas">{{ $d->nome }} </a> </td>
                @endif
            @endforeach
           
            {{-- <td>{{ $disciplina[$key] }}</td> --}}
     
            <td><a href="">Editar </a></td>
    
    
            <td>
                
                <form action="/professores/{{ $item->id_disciplina  }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit"
                            class="border-b-2  border-dotted italic text-black"
                            > Apagar </button>
    
                </form>
    
            </td>
            
          </tr>
          @endforeach
      
        </tbody>
      </table>
    </div>    
    
@endsection