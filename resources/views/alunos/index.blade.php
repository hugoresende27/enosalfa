@extends('layouts.app')

@section('content')

<div class="container p-3" style="margin:20px">

  <h1 class="text-white text-center display-4 tag-tit1">ALUNOS</h1>

 @if (session()->has('message'))
 <div class="text-white">
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif
{{-- 
<form action="{{ route('search') }}" method="GET">
  {{ csrf_field() }}
  <input type="text" name="search" required/>
  <button type="submit" class="btn-editar">Search</button>
</form> --}}


    {{-- <a href="/" class="btn-voltar " style="background-color: red">Voltar</a> --}}
    @if (Auth::user()->role >2)
      <a href="/alunos/create" class="btn-adicionar" style="background-color: green">Adicionar</a>
    @endif
    



<div class="table-responsive">


    <table class="  table table-striped table-dark">
        <thead>
          <tr>
            {{-- <th scope="col">ID do aluno</th> --}}
            <th scope="col">Nome</th>
            
            {{-- <th scope="col">Email</th> --}}
            {{-- <th scope="col">ID do Curso</th> --}}
            
            <th scope="col">Sala</th>
            <th scope="col">Turma</th>
            
           
            <th scope="col">GESTÃO</th>
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

                
                {{-- <td>{{ $key->id }}</td> --}}
                    <td> <a href="/alunos/{{ $key->id }}">  {{ $key->nome }} </a></td>

                  @foreach ($salas as $sala)
                    @if ( $key->sala_id == $sala->id)
                      <td>{{ $sala->nome }}</td>
                  
                    @endif
                  
                  @endforeach
    

                  <td>   {{ $key->id_turma }} </td>


             
                
 
             
               
              @if (Auth::user()->role >2)

                <td>  <a href="/alunos/{{ $key->id }}/alunoturmas">Alterar Turma</a></td>
              
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
              @endif
              @endforeach
              
        </tbody>
       
      </table>
 
      
        
        


</div>
    
<div class="text-center next-previous">
  {{ $alunos->links(); }}
</div>

    </div>    
    
@endsection