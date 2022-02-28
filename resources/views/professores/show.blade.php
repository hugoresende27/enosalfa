@extends('layouts.app')

@section('content')

   {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
   @if (session()->has('message'))
   <div class="text-white"  id='hideMe'>
       <p class="delete">
           {{ session()->get('message') }}
       </p>
   </div>
  @endif
      

<div class="container p-3" style="margin:20px">

  <a href="{{ url()->previous() }}" class="btn-voltar" style="background-color: red">Voltar</a>
  <h1 class="text-white text-center display-4">Ficha Técnica do Professor</h1>

  
@if (Auth::user()->role>1)
    

  <div class="card bg-light mb-3 show-meu" style="max-width: ">
    <div class="card-header display-4">{!! $nome !!} 
      @if (Auth::user()->role >2)
        <a href="../professores/{{ $id }}/edit" class="float-right btn-editar" style="font-size: 1.2rem">EDITAR</a>
      @endif
    </div>
      
      <div class="card-body">
      
    

        <h5 class="card-title">

          ID: {{ $id }}
 
  
 
     </h5>
        <h5 class="card-title">Disciplina:
          
          @if (isset($disciplina->id))
          <span class="tag-verde" >
              {{ $disciplina->nome }}
          </span>
          @else

            <span class="tag-red" >
              @if (Auth::user()->role >2)
                <a href="../professores/{{ $id }}/edit" >
                SEM DISCIPLINA
                </a></span>
              @endif
          @endif

              
          


        </h5>
        <h5 class="card-title">Idade:

            {{ $x }} anos, nascido em 

            {{ $data2->toDateString() }}

     

        </h5>
        <h5 class="card-title"> 

      {{ $email }}

        </h5>
        <h5 class="card-title">Morada: 

          {{ $morada }}

        </h5>
        <h5 class="card-title">
 

        </h5>
        <h5 class="card-title">Telefone: 

       {{ $telefone }}

        </h5>
       

        <h5 class="card-title">Turmas: 

        
              @foreach ($turmas as $t)
            
                @if ($t->professor_id == $id)

                <div class="prof-turmas">  
                  <span style="background-color:; padding:5px !important; color:#fff;" >
                    <a href="/turmas/{{ $t->turma_id }}">{{ $t->turma_id }}</a>
                
                </div>


               @else
 
              
                  </span>
                @endif
          @endforeach
     

        </h5>
        @if (Auth::user()->role >2)
          <span class="tag-verde" >
            <a href="/professores/{{ $id }}/profturmas">Atribuir Turma</a> 
          
          </span>
        @endif
        <h5 class="card-title">Registado em: 

          {{ $created_at }}

        </h5>
        <h5 class="card-title">Ultima atualização de registo em: 

          {{ $updated_at }}

        </h5>


      </div>
  
    </div>
  
    @else
            
    <h1 class="text-center text-uppercase" style="background-color:red; font-family: 'Consolas'; color:#fff;font-size:5rem;">ACESSO VEDADO</h1>
    @endif 

 

 
 
</div>

  
  
       
       
   

@endsection