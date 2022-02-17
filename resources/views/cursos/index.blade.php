@extends('layouts.app')

@section('content')

<div class="container p-3" style="margin:20px">

  <h1 class="text-white text-center display-4">CURSOS</h1>

  
   {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
 @if (session()->has('message'))
 <div class="text-white">
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif


    {{-- <a href="/" class="btn-voltar" style="background-color: red">Voltar</a> --}}
    
    <a href="/cursos/create" class="btn-adicionar" style="background-color: green">Adicionar</a>

    <div class="table-responsive">

    <table class="  table table-striped table-dark">
        <thead>
          <tr>

            <th scope="col">ID do curso</th>
            <th scope="col">Nome do curso</th>
        
            
            
            
            
            <th scope="col">EDITAR</th>
            <th scope="col">APAGAR</th>
          </tr>
        </thead>
        <tbody>
         
          @foreach ($cursos as $item)
          <tr>
            <td>{{ $item->id }}</td>
            <td><a href="/cursos/{{ $item->id }}">  {{ $item->nome }} </a></td>
           
            
            
            
     
            <td><a href="/cursos/{{ $item->id }}/edit">Editar </a></td>
            
            
    
            <td>
                
                <form action="/cursos/{{ $item->id }}" method="POST">
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
    </div>    
    
@endsection