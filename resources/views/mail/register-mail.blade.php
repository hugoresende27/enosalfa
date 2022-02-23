

{{-- @extends('layouts.app')

@section('content') --}}

<style>

    body{
        background-color: #000;

    }

    a{
        color: greenyellow;
        font-family: 'Consolas',sans-serif;
        font-size: 1.2rem;
        text-align: center;

    }
    .tit{
        background-color: darkgreen; 
        padding:10px; border-radius:5px ; 
        width: 10px;
        text-align: left;
    }
    footer{
        position: absolute !important;
        left: 200px !important;
    }
    .minha-img{
        width: 300px;
        height: 400px;
    }
    p{
        background-color: #000;
        color:#fff;
    }
    .meu-card{
        background-color: #000;
        padding: 20px;
        border-radius: 10px;
    }
    h1{
        background-color: darkgreen;
        color: #fff;
        padding: 20px;
        border-radius: 10px;
    }

</style>
<div class="container" style="margin:20px; color:#fff !important">

    <h1 class="text-white display-4 minha-tag"
        style=""
    >Enos HR &copy; 2022</h1>
    <div class="text-center">
    <div class="card meu-card" >

        {{-- {{ dd(get_defined_vars()) }} --}}
        @if (isset($details))
            <p>NOME:{{ $details['nome'] }}</p>
            <p>EMAIL:{{ $details['email']}}</p>
            <p>PASSWORD:{{ $details['pass'] }}</p>
            <p>NÍVEL DE ACESSO:{{ $details['role'] }}</p>
        @endif
        
        <a href="https://enos-alfa.herokuapp.com/" class="btn btn-primary">
      
      </div>
    </div>





    
{{-- @endsection --}}


