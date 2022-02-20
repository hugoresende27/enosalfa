@extends('layouts.app')

@section('content')

<div class="container" style="margin:20px">

  <h1 class="text-white text-center display-4 minha-tag"
      style="background-color: darkgreen; 
      padding:10px; border-radius:5px"
  >GESTÃO DE USERS DO SISTEMA</h1>

     {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
 @if (session()->has('message'))
 <div class="text-white">
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif

@if (Auth::user()->role >2)
  
    <div class="table-responsive">

      <div class="float-left">
        <a  href="{{ route('register') }}" class="btn-adicionar" style="background-color: green">Registar Novo User</a>
    </div>

    <table class=" table table-striped table-dark">
        <thead>
          <tr>

            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            
        
        
        
            <th scope="col">Nível</th>
            <th scope="col">APAGAR</th>
          </tr>
        </thead>
        <tbody>

          
        @foreach ($users as $u)
           
            <tr>

                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>

                @if ($u->role == 1)
                    <td>Aluno</td>
                @elseif ($u->role == 2)
                    <td>Professor</td>
                @else
                    <td>Administrador</td>
                @endif
               
                <td>
                  
                    <form action="/usersmanager/{{ $u->id }}/delete" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit"
                                class="border-b-2  border-dotted italic"
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