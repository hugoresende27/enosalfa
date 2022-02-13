@extends('layouts.app')

@section('content')

<div class="container p-3" style="margin:20px">

  <h1 class="text-white text-center display-4">ALUNOS</h1>

   {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
 @if (session()->has('message'))
 <div class="text-white">
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif
    <a href="/" class="btn-inicial" style="background-color: red">Voltar</a>
    
    <a href="/alunos/create" class="btn-inicial" style="background-color: green">Adicionar</a>



    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">ID do aluno</th>
            <th scope="col">Turma</th>
            <th scope="col">Sala</th>
            <th scope="col">Curso</th>
            
            <th scope="col">EDITAR</th>
            <th scope="col">APAGAR</th>
          </tr>
        </thead>
        <tbody>
         
            @foreach ($alunos as $item)
                
            
              <tr>
                <td><a href="/alunos/{{ $item->id }}">  {{ $item->nome }} </a></td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->turma }}</td>
                <td>{{ $item->sala }}</td>
                <td>{{ $item->id_curso }}</td>
        
                <td><a href="">Editar </a></td>
        
        
                <td>
                    
                    <form action="/alunos/{{ $item->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit"
                                class="border-b-2  border-dotted italic text-red-200"
                                > Apagar </button>
        
                    </form>
        
                </td>
                
              </tr>

              @endforeach
      
        </tbody>
      </table>
    </div>    
    
@endsection