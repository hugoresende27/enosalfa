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


  <h1 class="text-white text-center display-4"> Ficha Técnica do aluno</h1>


  <div class="card bg-light mb-3" style="max-width: ">
    <div class="card-header display-4">NOME:{!! $aluno->nome !!} 
    
        <a href="../alunos/{{ $aluno->id }}/edit" class="float-right btn-editar">EDITAR</a>
        {{-- <a href="{{ action('AlunoController@edit') }}" class="float-right btn-editar">EDITAR</a> --}}

    </div>
      <div class="card-body">
        <h5 class="card-title">Aluno ID:

          :: ID {{ $aluno->id }}

        </h5>
        <h5 class="card-title  bg-info ">Curso:

          @if (isset($curso->id))
              <a href="/cursos/{{ $curso->id }}" class="text-black"> {{ $curso->nome }}</a>
          @else
             SEM CURSO
          @endif

        </h5>
      

        <h5 class="card-title">Idade:

            {{ $x }} anos, nascido em {{ $aluno->idade }}

     

        </h5>
        <h5 class="card-title"> 

      {{ $aluno->email }}

        </h5>
        <h5 class="card-title">Morada: 

          {{ $aluno->morada }}

        </h5>
        <h5 class="card-title">
 

        </h5>
        <h5 class="card-title">Telefone: 

       {{ $aluno->telefone }}

        </h5>

       

        <h5 class="card-title">Turma: 
          {{ $aluno->id_turma }}
     

        </h5>
        <h5 class="card-title">Sala: 

          {{ $aluno->sala }}
        </h5>
        <h5 class="card-title">Registado em: 

          {{ $aluno->created_at }}

        </h5>
      
      </div>
  </div>

 
<div class="container p-3" style="margin:20px">


  <h2 class="text-white display-8">Notas</h2>

  

  <div class="card bg-light mb-3" style="max-width: ">


    <div class="table-responsive">



    <table class="table table-dark  ">
      <thead>
        <tr>
          
          <th scope="col">Nota</th>
          <th scope="col">Disciplina</th>
        </tr>
      </thead>
      <tbody>
        <tr>
    @foreach ($nota as $n)
        
    <td>{{ $n->nota}}</td>
            
        @foreach ($disc as $d)
            @if ($d->id == $n->id_disciplina)
              <td><a href="/disciplinas/{{ $d->id }}">  {{ $d->nome}} </a></td>
            @endif
           
            
        @endforeach
      </tr> 
    @endforeach
        

         
          {{-- @foreach ($disc as $d)
          <tr>
            @foreach ($nota as $n)

              @if ($d->id == $n->id_disciplina)

                <td>{{ $d->nome }}</td>
                <td>{{ $n->nota }}</td>

              @endif

                
            @endforeach

          </tr>
 
          @endforeach --}}
          
       
    
      </tbody>
    </table>
    </div>
  </div>


 
 
</div>

  
  
       
       
   

@endsection