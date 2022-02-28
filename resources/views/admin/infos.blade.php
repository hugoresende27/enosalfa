@extends('layouts.app')

@section('content')

<div class="container" style="margin:20px">

  <h1 class="text-white text-center display-4 minha-tag"
      style="background-color: darkgreen; 
      padding:10px; border-radius:5px"
  >GESTÃO DE USERS DO SISTEMA</h1>

     {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
 @if (session()->has('message'))
 <div class="text-white" id='hideMe'>
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif

@if (Auth::user()->role >2)
  
    <div class="table-responsive">

 

    <table class=" table table-striped table-dark">
        <thead>
          <tr>

         
            <th scope="col">Email</th>
            <th scope="col">Data do pedido</th>
            <th scope="col">Contactar</th>
            

           
          </tr>
        </thead>
        <tbody>

          
        @foreach ($mails as $m)
           
            <tr>

                
                <td>{{ $m->email }}</td>
                <td>{{ $m->created_at }}</td>
                <td> <a href="https://mail.google.com/" target="_blank">Contactar</a> </td>

  
     
                
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