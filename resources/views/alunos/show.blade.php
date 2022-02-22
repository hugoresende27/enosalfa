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

  <a href="{{ url()->previous() }}" class="btn-voltar" style="background-color: red">Voltar</a>
  <h1 class="text-white text-center display-4"> Ficha Técnica do aluno</h1>


  <div class="card bg-light mb-3 show-meu" style="max-width: ">
    <div class="card-header display-4">{!! $aluno->nome !!} 
    
      @if (Auth::user()->role >1)
        <a href="../alunos/{{ $aluno->id }}/edit" class="float-right btn-editar" style="font-size: 1.2rem">EDITAR</a>
        {{-- <a href="{{ action('AlunoController@edit') }}" class="float-right btn-editar">EDITAR</a> --}}
      @endif
    </div>
      <div class="card-body">
        <h5 class="card-title">Aluno ID:

           {{ $aluno->id }}

        </h5>
        <h5 class="card-title">Curso:

          @if (isset($curso->id))
            <span class="tag-verde" >
              <a href="../cursos/{{ $curso->id }}"> {{ $curso->nome }} </a>
            </span>
  
          @else
            <span class="tag-red" >
              <a href="../alunos/{{ $aluno->id }}/edit">
              SEM CURSO
              </a>
            </span>
          @endif

        </h5>
      

        <h5 class="card-title ">Idade:

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
          @if (isset($aluno->id_turma))
          
            <span class="tag-verde" >
              <a href="/turmas/{{ $aluno->id_turma }}">{{ $aluno->id_turma }}</a>  
            
            </span>
            
          @endif
        
          @if (Auth::user()->role >2)
          <span class="tag-red" >
            <a href="/alunos/{{ $aluno->id }}/alunoturmas">Alterar</a> 
           
          </span>
          @endif

        </h5>
        <h5 class="card-title">Sala: 
          <span class="tag-verde" >
          {{ $sala }}
          </span>
        </h5>
        <h5 class="card-title">Média: 
          <span <?php if ($media>14) echo 'style="background-color:green; padding:5px !important; color:#fff;"';
                    if ($media>10) echo 'style="background-color:orange; padding:5px !important; color:#fff;"';
                    else  echo 'style="background-color:red; padding:5px !important; color:#fff;"' ?>   >
          {{ $media }}
          </span>
        </h5>
        <h5 class="card-title">Registado em: 

          {{ $aluno->created_at }}

        </h5>
        <h5 class="card-title">Ultima atualização de registo em: 

          {{ $aluno->updated_at }}

        </h5>
      
      </div>
  </div>

 
<div class="container" style="">


  <h2 class="text-white display-8 tag-tit1 text-center">Notas</h2>

  

  <div class="card bg-light " style="max-width: ">


    <div class="table-responsive text-center">



    <table class="table table-dark  ">
      <thead>
        <tr>
          
          <th scope="col" class="text-center">0-20</th>
          <th scope="col" class="text-center">Disciplina</th>
        </tr>
      </thead>
      <tbody>
      
        @foreach ($nota as $n)
        <tr>
          <td>{{ $n->nota}}</td>
            
          @foreach ($disc as $d)
            @if ($d->id == $n->id_disciplina)
              <td><a href="/disciplinas/{{ $d->id }}">  {{ $d->nome}} </a></td>
            @endif
           
            
          @endforeach
        </tr> 
        @endforeach
        
      
         
     
          
       
    
      </tbody>
    </table>
    </div>
  </div>


 
 
</div>

  
  
       
       
   

@endsection