@extends('layouts.app')

@section('content')
    <style>

        .menu{
                
                position: absolute;
                top: 50%;
                left: 50%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                text-align: center;
                
                
            }
            ul li{
                margin: 20px;
            }
      

    </style>
   
       
        @auth
    

            <div class="menu">
                <h1 class="titulo-inicial">Sistema E.N.O.S.</h1>
            
                <ul>
                    <li>
                        <a href="alunos" class="btn-inicial ">Alunos</a>
                    </li>
                    <li>
                        <a href="professores" class="btn-inicial ">Professores</a>
                    </li>
                    <li>
                        <a href="cursos" class="btn-inicial ">Cursos</a>
                    </li>
                    <li>
                        <a href="disciplinas" class="btn-inicial ">Disciplinas</a>
                    </li>
                    <li>
                        <a href="notas" class="btn-inicial ">Notas</a>
                    </li>
                </ul>
            </div>
        @endauth

@endsection          
 
