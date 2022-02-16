@extends('layouts.app')

@section('content')

<div class="container p-3" style="margin:20px">

  <h1 class="text-white text-center display-4">ALUNOS</h1>

 @if (session()->has('message'))
 <div class="text-white">
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif


    <a href="/" class="btn-voltar " style="background-color: red">Voltar</a>
    
    <a href="/alunos/create" class="btn-adicionar" style="background-color: green">Adicionar</a>



<div class="table-responsive">


    <table class="  table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">ID do aluno</th>
            <th scope="col">Nome</th>
            
            <th scope="col">Email</th>
            {{-- <th scope="col">ID do Curso</th> --}}
            {{-- <th scope="col">Turma</th> --}}
            <th scope="col">Sala</th>
            
            
           
            <th scope="col">EDITAR</th>
            <th scope="col">APAGAR</th>
          </tr>
        </thead>
        <tbody>
         
        
            {{-- @foreach ($alunos as $key=>$row) --}}
            {{-- <h1> {{ $al->id_curso }} </h1> --}}
            @foreach ($alunos as $key)
          {{-- {{ dd($al) }} --}}
              <tr>

                
                <td>{{ $key->id }}</td>
                  <td> <a href="/alunos/{{ $key->id }}">  {{ $key->nome }} </a></td>
                <td>   {{ $key->email }} </td>

                {{-- @foreach ($curso as $item)

                  @if(isset($item) && ($item->id == $key->id_curso))

                      {{-- <td><a href="/cursos/{{ $item->id }}">  {{ $item->nome }}</a></td> 
                  @else
                      
                  @endif 

                @endforeach --}}
                
                

                {{-- @foreach ($turmas as $turma)
                @if ($key->id_)
                    
                @endif
                    
                @endforeach --}}
                {{-- <td>{{ $key->id_turma }}</td> --}}
                <td>{{ $key->sala }}</td>
                {{-- <td>    
                  @foreach ($curso as $item)
                  <td>{{ $item }}</td>
                @endforeach</td> --}}
            

                {{-- <td>{{ $row['id']}} </td>
                <td>{{ $row['nome']}} </td>
                
                <td>{{ $curso[$key]}} </td>
              
                <td>{{ $row['turma']}} </td>
                <td>{{ $row['sala']}} </td> --}}
             
               
        
              <td>  <a href="/alunos/{{ $key->id }}/edit">EDITAR</a></td>
        
        
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
    


    </div>    
    
@endsection