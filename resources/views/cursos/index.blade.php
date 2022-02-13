@extends('layouts.app')

@section('content')

<div class="container p-3" style="margin:20px">

  <h1 class="text-white text-center display-4">CURSOS</h1>
    <a href="/" class="btn-inicial" style="background-color: red">Voltar</a>
    
    <a href="/cursos/create" class="btn-inicial" style="background-color: green">Adicionar</a>

    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Nome do curso</th>
        
            
            <th scope="col">Disciplinas</th>
            <th scope="col">ID do curso</th>
            
            <th scope="col">EDITAR</th>
            <th scope="col">APAGAR</th>
          </tr>
        </thead>
        <tbody>
         
          @foreach ($cursos as $item)
          <tr>
            <td><a href="/cursos/{{ $item->id }}">  {{ $item->nome }} </a></td>
           
            
            <td>{{ $item->disciplinas }}</td>
            <td>{{ $item->id }}</td>
     
            <td><a href="">Editar </a></td>
            
            
    
            <td>
                
                <form action="/cursos/{{ $item->id }}" method="POST">
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