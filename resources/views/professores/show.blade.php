@extends('layouts.app')

@section('content')

   {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
   @if (session()->has('message'))
   <div class="text-white">
       <p class="delete">
           {{ session()->get('message') }}
       </p>
   </div>
  @endif
      

<div class="container p-3" style="margin:20px">


  <h1 class="text-white text-center display-4">Ficha Técnica do Professor</h1>

  

  <div class="card bg-light mb-3" style="max-width: ">
    <div class="card-header display-4">{!! $nome !!} 

      <a href="../professores/{{ $id }}/edit" class="float-right btn-editar">EDITAR</a>
      
    </div>
      
      <div class="card-body">

        <h5 class="card-title">

          ID: {{ $id }}
 
  
 
     </h5>
        <h5 class="card-title">Disciplina:
          
          @if (isset($disciplina->id))
          <span style="background-color:green; padding:5px !important; color:#fff;" >
              {{ $disciplina->nome }}
          </span>
          @else
            <span style="background-color:red; padding:5px !important; color:#fff;" >
              <a href="../professores/{{ $id }}/edit" >
              SEM DISCIPLINA
              </a></span>
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
            
                @if ($t->id_professor == $id)

                <div class="prof-turmas">  
                  <span style="background-color:green; padding:5px !important; color:#fff;" >
                  {{ $t->id_turma }}  
                
                </div>


               @else
                  <span style="background-color:red; padding:5px !important; color:#fff;" >
              
                    {{-- SEM TURMAS --}}
              
                  </span>
                @endif
          @endforeach
     

        </h5>

        <h5 class="card-title">Registado em: 

          {{ $created_at }}

        </h5>
        <h5 class="card-title">Ultima atualização de registo em: 

          {{ $updated_at }}

        </h5>


      </div>
  
    </div>
  

 

 
 
</div>

  
  
       
       
   

@endsection