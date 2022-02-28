@extends('layouts.app')

@section('content')

<div class="container p-3" style="margin:20px">


 @if (session()->has('message'))
 <div class="text-white" id='hideMe'>
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif


    



<div class="table-responsive">


    <table class="  table table-striped table-dark">
        <thead>
          <tr>
       
            <th scope="col"></th>
            
            
       
          </tr>
        </thead>
        <tbody>
         
        @if($collection->isNotEmpty())
    
        {{-- @if(!empty($collection >0))   --}}
        <h2 class="tag-tit1 text-center" style="color:#fff;">{{ $count }} resultados</h2>
          @foreach ($collection as $res)
            @foreach ($res as $r)
                
          
                <tr>
                    <td> 
                      @if (isset( $r->id_disciplina))
                           
                            <span class="span-res"> <a href="/professores"> Professor </span> </a> <a href="/professores/{{ $r->id }}">  {{ $r->nome }}  </a>
                         
                      @else 
                          @if (isset( $r->sala_id))
                           
                              <span class="span-res"> <a href="/alunos"> Aluno </a></span>  <a href="/alunos/{{ $r->id }}">  {{ $r->nome }}
                            </a>
                          @else
                            @if (isset( $r->lugares))
                            
                                <span class="span-res"> <a href="/salas"> Sala </a></span>   <a href="/salas">  {{ $r->nome }}
                              </a>
                            @else
                         
                                <span class="span-res"> <a href="/disciplinas"> Disciplina </a> </span>      <a href="/disciplinas/{{ $r->id }}">  {{ $r->nome }}
                              </a>
                            @endif
                          @endif
                      @endif

                      
                     
                    </td>
           
            @endforeach
                
            @endforeach
        @else 
        <div>
            <h2 class="tag-tit1 text-center" style="color:#fff;">Sem resultados</h2>
        </div>
        @endif
        
           
               
              
         
              
        </tbody>
       
      </table>
 
      
        
        


</div>
    
<div class="text-center next-previous">
  {{-- {{ $res->links(); }} --}}
</div>

    </div>    
    
@endsection