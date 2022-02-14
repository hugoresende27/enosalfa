@extends('layouts.app')

@section('content')
    <style>

        body{
            /* background-image: url('https://cdn.pixabay.com/photo/2015/11/05/08/21/geometry-1023846_960_720.jpg'); */
            /* background-image: url('https://cdn.pixabay.com/photo/2016/06/13/07/59/pi-1453836_960_720.jpg'); */
            background-image: url('https://cdn.pixabay.com/photo/2017/10/01/14/14/street-2805643_960_720.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

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

            .inicio{
                /* background-color: darkgreen; */
                width: 30%;
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                top:50%;
                color: #fff;
            }
             a:hover{
                text-decoration: none;
                color: #fff;
                
            }
            .btn-heros{
                width: 100%;
                display:inline-flex;
                padding: 20px;
                margin: 20px;
                text-align: left;
                
            }

    </style>




        <div class="inicio">

            @guest
            @if (Route::has('login'))
                
                    <a class="btn-heros" style="background-color: darkgreen" href="{{ route('login') }}">{{ __('Login') }}</a>
             
            @endif

            @if (Route::has('register'))
                
                    <a class="btn-heros" style="background-color: darkred" href="{{ route('register') }}">{{ __('Registar') }}</a>
               
            @endif
                @endguest
        </div>
        
       
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
 
