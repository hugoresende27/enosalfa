@extends('layouts.app')

@section('content')

<div class="container p-3" style="margin:20px">

  <h1 class="text-white text-center display-4 tag-tit1">GERIR SALAS</h1>
   {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
 @if (session()->has('message'))
 <div class="text-white">
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif


  
@if (Auth::user()->role >2)

    <a href="/salas/create" class="btn-adicionar float-left" style="background-color: green">Adicionar Sala</a>

  

    <div class="table-responsive">

    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Número</th>
            <th scope="col">Nome</th>

            <th scope="col">Lugares</th>
            <th scope="col" >Aquecimento</th>
            <th scope="col" >Janelas</th>
            <th scope="col" >Internet</th>
            <th scope="col">EDITAR</th>
            <th scope="col">APAGAR</th>
          </tr>
        </thead>
        <tbody>
         
     @foreach ($salas as $sala)
                 
          <tr>
        
            <td> {{ $sala->id }} </td>
            <td> {{ $sala->nome }} </td>
            <td> {{ $sala->lugares }} </td>
            <td>
              @if (  $sala->aquecimento != 0  )
                  SIM
              @else   
                  NÃO
              @endif
            </td>
            <td>
              @if (  $sala->janelas != 0  )
                  SIM
              @else   
                  NÃO
              @endif
            </td>
            <td>
              @if (  $sala->internet != 0  )
                  SIM
              @else   
                  NÃO
              @endif
            </td>


            
        
           
           
    
            <td> <a href="salas/{{$sala->id}}/edit">Editar </a> </td>
           
    
            <td>
                
                <form action="salas/{{ $sala->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit"
                            class="border-b-2  border-dotted italic text-black"
                            onclick="return confirm('Tem a certeza?')" 
                            > Apagar </button>
    
                </form>
    
            </td>
          
          </tr>
       
      @endforeach
        </tbody>
      </table>

    </div>
    </div>    
    @else
            
    <h1 class="text-center text-uppercase" style="background-color:red; font-family: 'Consolas'; color:#fff;font-size:5rem;">ACESSO VEDADO</h1>
    @endif 
    
@endsection