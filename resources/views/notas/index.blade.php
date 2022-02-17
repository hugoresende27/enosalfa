@extends('layouts.app')

@section('content')

<style>
  .minimo-altura{
    min-height: 70vh;
    /* background-color: yellow; */
  }

  </style>

<div class="container p-3 minimo-altura" style="margin:20px">

  <h1 class="text-white text-center display-4">NOTAS</h1>
  
     {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
 @if (session()->has('message'))
 <div class="text-white">
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif


    {{-- <a href="/" class="btn-voltar" style="background-color: red">Voltar</a> --}}
    
    <a href="/notas/create" class="btn-adicionar" style="background-color: green">Lançar Nota</a>


    <div class="table-responsive">



    <table class=" table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Aluno</th>
        
            
           
            <th scope="col">Nota</th>
            <th scope="col">Disciplina</th>
            
            <th scope="col">APAGAR</th>
          </tr>
        </thead>
        <tbody>
   

          @foreach ($todas_as_notas as $nota)

        
              @foreach ($alunos as $a)
              
                  @if (isset($a) && ($a->id == ($nota->id_aluno)))
                      <td> <a href="/alunos/{{ $a->id }}">  {{ $a->nome }}  </a> </td>
                  @endif
                  
              @endforeach
            
              <td>{{ $nota->nota }}</td>

              @foreach ($disciplinas as $dis)
                  @if (isset($dis) && ($dis->id == $nota->id_disciplina))
                      <td> <a href="/disciplinas/ {{  $dis->id }}">  {{ $dis->nome }} </a> </td>
                  @endif
              @endforeach
          
         
    
    
           
            <td>
                
                <form action="/notas/{{ $nota->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit"
                            class="border-b-2  border-dotted italic text-red-200"
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