@extends('layouts.app')

@section('content')

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


    <a href="/" class="btn-voltar" style="background-color: red">Voltar</a>

    <a href="/turmas/create" class="btn-adicionar" style="background-color: green">Adicionar</a>


    <div class="table-responsive">

    <table class=" table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Turma</th>
            
            <th scope="col">Curso</th>
          
            
            <th scope="col">EDITAR</th>
            <th scope="col">APAGAR</th>
          </tr>
        </thead>
        <tbody>
         
          @foreach ($todas_as_turmas as $turma)
        
        
          <tr>
            
            
            <td>  {{ $turma->id }} </td>
          
           
            @foreach ($todos_os_cursos as $curso)
                @if ($turma->id_curso == $curso->id)
                  <td> <a href="/cursos">{{ $curso->nome }} </a> </td>
                @endif
            @endforeach

          
           
          
       
     
            <td><a href="">Editar </a></td>
    
    
            <td>
                
                <form action="/turmas/{{ $turma->id }}" method="POST">
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