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
  <h1 class="text-white text-center display-4">Distribuir Turmas</h1>

  

  <div class="card bg-light mb-3" style="max-width: ">
    <div class="card-header display-4">{!! $professore->nome !!} 


      
   
      
    <form action="/professores/{{ $professore->id  }}/updateTurma" method="POST">
      @csrf
      {{-- @method('PUT') --}}
 


      <select name="turma_id" class="form-control" id="turmas"  >

    @foreach ($turmas as $turma)

              <div class="form-group mb-2" >

                
                  <option value="{{$turma->id}}">{{$turma->id}} </option>
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

  
  
       
       
   

@endsection