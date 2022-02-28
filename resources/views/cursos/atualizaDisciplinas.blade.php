@extends('layouts.app')

@section('content')

   {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
   @if (session()->has('message'))
   <div class="text-white" id='hideMe'>
       <p class="delete">
           {{ session()->get('message') }}
       </p>
   </div>
  @endif
      
@if (Auth::user()->role >2)

<div class="container p-3" style="margin:20px">

  <a href="{{ url()->previous() }}" class="btn-voltar" style="background-color: red">Voltar</a>
  <h1 class="text-white text-center display-4 tag-tit1">Atribuir disciplina</h1>

  

  <div class="card bg-light mb-3" style="max-width: ">
    <div class="card-header display-4">{!! $curso->nome !!} 


      
   
      
    <form action="/cursos/{{ $curso->id  }}/updateCurso" method="POST">
      @csrf
      {{-- @method('PUT') --}}
 


      <select name="disciplina" class="form-control" id="cursos"  >

    @foreach ($disciplinas as $d)

              <div class="form-group mb-2" >

                
                  <option value="{{$d->id}}">{{$d->nome}} </option>
                {{-- {!! Form::checkbox('turma_id[]',  false, !!} --}}
              
              </div>
    @endforeach
  </select>
            <button type="submit"
            class="float-right meuBtn text-white m-3"
            > Enviar </button>

</form>
</div>
    </div>
  

 

 
 
</div>

  
  @else 
  <h1 class="text-center text-uppercase" style="background-color:red; font-family: 'Consolas'; color:#fff;font-size:5rem;">ACESSO VEDADO</h1>

@endif     
       
   

@endsection