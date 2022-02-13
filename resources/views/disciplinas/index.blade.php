@extends('layouts.app')

@section('content')

<div class="container p-3" style="margin:20px">

  <h1 class="text-white text-center display-4">DISCIPLINAS</h1>

     {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
 @if (session()->has('message'))
 <div class="text-white">
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif


    <a href="/" class="btn-inicial" style="background-color: red">Voltar</a>
    
    <a href="/disciplinas/create" class="btn-inicial" style="background-color: green">Adicionar</a>

    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Nome da Disciplina</th>
            <th scope="col">ID Disciplina</th>
            <th scope="col">Nome do professor</th>
        
            
            <th scope="col">ID Professor</th>
            
            <th scope="col">EDITAR</th>
            <th scope="col">APAGAR</th>
          </tr>
        </thead>
        <tbody>

          
          @foreach ($disc as $key=>$row)
                {{-- {{ dd($row) }} --}}
          
          <tr>
            <td>  {{ $row['nome'] }} </td>
           
            
            <td>{{ $row['id'] }}</td>
            
            <td>{{ $profs[$key] }}</td>

            <td>{{ $row['id_professor'] }}</td>
     
            <td><a href="">Editar </a></td>
    
    
            <td>
                
                <form action="/disciplinas/{{ $row['id'] }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit"
                            class="border-b-2  border-dotted italic"
                            > Apagar </button>
    
                </form>
    
            </td>
            
          </tr>
    
          @endforeach
        </tbody>
      </table>
    </div>    
    
@endsection