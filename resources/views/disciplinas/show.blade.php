@extends('layouts.app')

@section('content')

<div class="container p-3" style="margin:20px">

  <h1 class="text-white text-center display-4">NOTAS &rAarr; {{ $disciplina->nome }}</h1>

     {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
 @if (session()->has('message'))
 <div class="text-white">
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif


    <a href="/disciplinas" class="btn-voltar" style="background-color: red">Voltar</a>
    
   

    <table class="table table-striped table-dark">
        <thead>
          <tr>

            <th scope="col">Aluno</th>
            <th scope="col">Nota</th>
 
          </tr>
        </thead>
        <tbody>

          
         
        @foreach ($todos_os_alunos as $aluno)
          

            @foreach ($todas_as_notas as $nota)

                    <tr>

                        {{-- @if ( $aluno->id  == $nota->id_aluno )

                                <td> bajarus</td>

                        @endif    --}}
                            
                

                        @if ($aluno->id == $nota->id_aluno)

                            <td> {{ $nota->nota }}</td>
                            <td> <a href="/alunos/{{ $aluno->id }}">  {{ $aluno->nome }} </a></td>

                        @endif
                        

                    </tr>
                @endforeach
          
           
           {{-- {{ dd(get_defined_vars()); }}  --}}
            
       
    
        @endforeach

        </tbody>
      </table>
    </div>    
    
@endsection