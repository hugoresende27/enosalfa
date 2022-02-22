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



    @if (Auth::user()->role >2)
      <a href="/alunos/create" class="btn-adicionar" style="background-color: green">Adicionar</a>
    @endif
    



<div class="table-responsive">


    <table class="  table table-striped table-dark">
        <thead>
          <tr>
    
            <th scope="col">Nome</th>
            
         
            
            <th scope="col">Sala</th>
            <th scope="col">Turma</th>
            
           
            <th scope="col">GESTÃO</th>
            <th scope="col">EDITAR</th>
            <th scope="col">APAGAR</th>
          </tr>
        </thead>
        <tbody>
         
        
     
            @foreach ($alunos as $key)
  
              <tr>

                    <td> <a href="/alunos/{{ $key->id }}">  {{ $key->nome }} </a></td>

                  @if (isset($key->sala_id ))
                    @foreach ($salas as $sala)
                      @if ( $key->sala_id == $sala->id)
                        <td>{{ $sala->nome }}</td>
                    
                      @endif
                    
                    @endforeach
                  @else
                    <td>NÃO</td>
                  @endif
                @if (isset($key->id_turma ))
                  <td>   {{$key->id_turma  }} </td>
                @else
                  <td>NÃO</td>
                @endif

                 


             
                
 
             
               
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