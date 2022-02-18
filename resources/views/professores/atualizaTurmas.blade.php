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
 



     @foreach ($turmas as $turma)
              <div class="form-check form-check-inline mb-2">
                <input name="turma_id[]" class="form-check-input" id="turmas" type="checkbox" value="{{$turma->id}}" >
                <label class="form-check-label" for="turmas">{{$turma->id}}</label>

                {{-- {!! Form::checkbox('turma_id[]',  false, !!} --}}


              </div>
            @endforeach

            <button type="submit"
            class="float-right meuBtn text-white m-3"
            > Enviar </button>

</form>
</div>
    </div>
  

 

 
 
</div>

  
  
       
       
   

@endsection