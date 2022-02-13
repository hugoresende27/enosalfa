@extends('layouts.app')

@section('content')

<div class="container p-3" style="">

  <h1 class="text-white text-center display-4">ALUNOS</h1>

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
            <th scope="col">ID do aluno</th>
            <th scope="col">Nome</th>
            
            <th scope="col">Curso</th>
            {{-- <th scope="col">ID do Curso</th> --}}
            <th scope="col">Turma</th>
            <th scope="col">Sala</th>
            
            
            <th scope="col">EDITAR</th>
            <th scope="col">APAGAR</th>
          </tr>
        </thead>
        <tbody>
         
        
            {{-- @foreach ($alunos as $key=>$row) --}}
            @foreach ($alunos as $key)
          {{-- {{ dd($key) }} --}}
              <tr>

                
                <td>{{ $key->id }}</td>
                <td>{{ $key->nome }}</td>
                <td>{{ $key->id_curso }}</td>
                <td>{{ $key->turma }}</td>
                <td>{{ $key->sala }}</td>


                {{-- <td>{{ $row['id']}} </td>
                <td>{{ $row['nome']}} </td>
                
                <td>{{ $curso[$key]}} </td>
              
                <td>{{ $row['turma']}} </td>
                <td>{{ $row['sala']}} </td> --}}
             
               
        
                <td><a href="">Editar </a></td>
        
        
                <td>
                    
                    <form action="/alunos/{{ $key->id }}" method="POST">
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