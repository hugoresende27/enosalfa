@extends('layouts.app')

@section('content')

<div class="container p-3" style="margin:20px">



     {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
 @if (session()->has('message'))
 <div class="text-white"  id='hideMe'>
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif

<a href="{{ URL::previous() }}" class="btn-voltar" style="background-color: red">Voltar</a>
<h1 class="text-white text-center display-4"> Ficha Técnica da Turma</h1>
    <div class="card bg-light mb-3 show-meu" style="max-width: ">

      <div class="card-header display-4">
     
        {!! $turma->nome !!} 

        


      </div>
        <div class="card-body ">

          <h5 class="card-title lista-alunos-curso">Número da turma:

            {{ $turma->id }}
 
          </h5>
          <h5 class="card-title lista-alunos-curso">Sala:

            {{ $sala }}
 
          </h5>

          <h5 class="card-title">Curso:
            @foreach ($curso as $item)

              
                <div class="lista-alunos-curso">
                  <a href="/cursos/{{ $item->id }}">{{ $item->nome }}</a> 
                </div>
    
              @endforeach
          </h5>

          <h5 class="card-title">Alunos da Turma:
            {{-- {{ dd(get_defined_vars()); }} --}}
            @foreach ($alunos as $aluno)

            
              <div class="lista-alunos-curso">
                <a href="/alunos/{{ $aluno->id }}">{{ $aluno->nome }}</a> 
              </div>
       
       
            @endforeach
 
          </h5>

         
        
          

  
        
        </div>
    </div>


    
 
    </div>    
    
@endsection