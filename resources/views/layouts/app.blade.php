<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="PT-pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- <title>{{ env('APP_NAME') }} v{{ env('APP_V') }}</title> --}}
        <title> E.N.O.S. HR&copy;  &rAarr; v1.2 </title>


    


    <!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
        

     <!--Fontawesome CDN-->
	{{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> --}}

    <script src="//code.jquery.com/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
 




        <style>

@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');

            /*BODY E PRINCIPAL/////////////////////////////////////////////////////////////////////////////*/
            html,body{
                background-image: url('https://cdn.pixabay.com/photo/2015/04/01/11/08/sillouette-702178_960_720.jpg');
                background-size: cover;

                /* align-content: center; */
                display: flex;          /*coloca tudo em linha*/
                flex-direction: column; /*coloca tudo em coluna*/
                /* align-items: center;     */

                /* background-repeat: no-repeat; */
                height: 100%;
                /* font-family: 'Numans', sans-serif; */
                font-size: 1rem;
            }

            ul li{
                list-style: none;
            }

       
        
            label{
                color:#fff;
                background-color: rgb(11, 31, 2);
                border-radius: 3px;
                padding: 3px;
                margin: 3px;
                font-size:1.5rem;
            }

            input{
                font-size:1.5rem;
            }

            a{
                text-decoration: none;
                color: #000;
            }

            select{
                background-color: #000;
                color: #fff;
                font-size: 1.2rem;
                padding: 10px;
            }
            .titulo-topo{
                background-color: darkgreen;
                padding: 10px;
                border-radius: 5px;
                font-weight: 900;
                color: #fff !important;
            }

            .principal{
                /* min-width: 100vw; */
                /* text-align: center; */
                align-content: center;
               display: flex;          /*coloca tudo em linha*/
                flex-direction: column; /*coloca tudo em coluna*/
                align-items: center;    /*alinha horizontalmente*/
                /* justify-content: center;/*alinha tudo verticalmente com uso de height:100vh*/
            }

            .principal button{
                /* color: #000; */
                background-color: darkred;
                border-radius: 5px;
                padding: 4px 8px;
                border: none;
                outline: none;
            }

            .principal button:hover{
                background-color: red;
                transform: scale(1.05);
            }

            .tit{
                background-color: yellowgreen;
                
                border-radius: 10px;
                padding: 20px;
                margin: 10px;
                position: absolute;
            }

            .titulo-inicial{
                color: #000;
                
            }

                       
            .container a{
                text-decoration: none !important;
                color: #fff;
            }

            .titulo-inicial{
                color: #000;
                
            }
   
            .minimo-altura{
                min-height: 70vh;
                /* background-color: yellow; */
            }

            .lista-alunos-curso{
                font-size:1.5rem;
                background-color:#000;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                padding: 5px;
                margin: 10px;
                border-radius: 5px;
                text-align: center;
                color: #fff;
            
            }
            .dados{
                background-color:#000;
                width: 400px;
                height: 250px;
                font-family: 'Consolas';
                font-size: 1.2rem;
                color:yellowgreen;
                font-weight: 900;
                border-radius: 10px;
                padding: 10px;
            }

            .roletag{
                background-color: red;
                /* padding: 16px; */
                border-radius: 5px;
                /* width: 100px; */
                font-weight: 900 !important;
                font-family: 'Consolas', sans-serif;
            }

           
            .next-previous{
                
            }
            .next-previous a {
                color: #000 !important;
                /* background-color: darkgreen !important;
                font-family: 'Consolas',sans-serif !important;
                padding: 10px !important;
                border-radius: 5px !important; */

            }
         

            /*BOTÕES/////////////////////////////////////////////////////////////////////////////*/
     

            .nav-link{
                border-radius: 5px !important;
                color: #fff !important;
            }
            .nav-link:hover{
                color: #000 !important;
            }

            .nav-item {
                margin: 5px;
                border-radius: 10px;
                padding: 10px;
                color: #fff !important;
                background-color: darkgreen;
                font-weight: 500;
                text-transform: uppercase;
            }
            .nav-item:hover {
                color: #000 !important;
                background-color: #fff;
                transform: scale(1.2);
            }
            .nav-item2 {
                margin: 2px;
                border-radius: 10px;
                padding: 5px;
                color: #fff !important;
                background-color: darkgreen;
                font-weight: 500;
                text-transform: uppercase;
            }
            .nav-item2:hover {
                color: #000 !important;
                
            }

          

     
            .btn-inicial{
                background-color: rgb(13, 71, 25);
                /* font-family: 'Consolas',sans-serif; */
                font-size: 2rem;
                padding: 10px;
                margin: 10px
                color: #000;
                border-radius: 5px;
                
               
            }
            .btn-inicial:hover{
                background-color: rgb(255, 255, 255);
                color: rgb(0, 0, 0);
            }

            .btn-adicionar{
                padding: 15px;
                margin: 10px;
                border-radius: 5px;
                font-size: 26px; 
                float:right; 
            }
            .btn-voltar{
                padding: 15px;
                margin: 10px 0px;
                border-radius: 5px;
                font-size: 26px; 
                float:left; 
            }
 

            .meuBtn{
                font-weight: 900;
                font-family: 'Consolas',sans-serif !important;
                font-size: 1.5rem !important;
                border: none;
               height: 50px !important;
               
               /* height: auto !important; */
               
            }
            .meuBtn:hover{
          
                color: #000;
                border: none;
       
            }
           .card-title{
                text-align: left;
                width: fit-content;
            }

            .card-header{
                text-align: left;
            }
          
            .mostrar-erros{
                background-color: red;
                border-radius: 5px;
                text-align: center;
                /* padding: 3px; */
            }


            .btn-editar{
                background-color: darkgreen;
                color: #fff;
                padding: 3px;
                border-radius: 3px;
            }

            .btn-editar:hover{
                background-color: #000;
                color: yellowgreen;
                text-decoration: none;
            }

            .delete {
                background-color: darkblue;
                border-radius: 5px;
                text-align: center;
                padding: 3px;
                color:#fff;
            }

            .prof-turmas{
                font-size:1.5rem;
                background-color:#000;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                padding: 5px;
                margin: 10px;
                border-radius: 5px;
                text-align: center;
                color: #fff;
            }

            .tag-tit1{
                background-color: rgb(6, 24, 6);
                width:auto;
                margin-top: 10px;
                border-radius: 5px;
                text-transform: uppercase;
            }
            .tag-tit2{
                background-color: rgb(6, 24, 6);
                color: #fff;
                width:auto;
                padding: 20px;
                border-radius: 5px;
                text-transform: uppercase;
                font-size:1.2rem;
            }

            .span-res{               
                background-color: darkred;
                padding: 10px;
                margin: 0 5px;
            }
            .show-meu{
                /* opacity: 0.5 !important; */
               border-radius: 20px !important;
                background-color: rgba(0,0,0,.7) !important;
                color: #fff;
            }

            .btn-procurar {
                font-weight: 900;
                background-color: greenyellow;
                padding: 10px;
                border-radius: 10px;
            }
            .btn-procurar:hover {
                background-color: darkgreen;
                color:white;
                padding: 10px;
                border-radius: 10px;
            }
           
            .tag-verde{
                background-color:green; 
                border-radius:5px;
                padding:3px !important; 
                color:#fff;
            }
            .tag-verde:hover{
                background-color:yellowgreen;                      
            }
            .tag-verde:hover a{               
                color:#000 !important;              
            }
            .tag-red{
                background-color:red; 
                border-radius:5px;
                padding:3px !important; 
                color:#fff;
            }
            .tag-red:hover{
                background-color:yellowgreen;                      
            }
            .tag-red:hover a{               
                color:#000 !important;              
            }
          
            /*///////////////ESPECIAIS////////////////////////////////////////////////////////////////////*/

            .especial-id-turma{
                background-color: darkblue;
                text-align: center;
            }
            .especial-id-turma:hover{
                background-color: green;
                
                text-align: center;
            }
            
            /*///////////////BOOTSRAP !IMPORTANT////////////////////////////////////////////////////////////////////*/
            .card-body h5{
                font-size:1.5rem !important;
            }
/*///////////////BOTÕES MENU////////////////////////////////////////////////////////////////////*/
div[class*=box] {
  /* height: 33.33%;
  width: 100%; 
  display: flex;
  justify-content: center;
  align-items: center; */
}

.box-1 { 
    background-color: darkgreen; 
    border-radius: 10px !important;
    padding: 5px;
    margin: 0 5px;
}


.btn {
  line-height: 25px;
  height: 40px;
  text-align: center;
  width: 120px;
  cursor: pointer;
  font-family: 'Roboto' , sans-serif !important;
  color: #fff !important;
  font-weight: 900 !important;
  
}





/* 
========================
      BUTTON TWO
========================
*/
.btn-two {
  color: #FFF;
  transition: all 0.5s;
  position: relative; 
  font-size: 1.2rem;
    /* margin: 0 5px; */
    /* margin-left: -10px; */
  
}
.btn-two span a{
    color: #fff;
    font-family: 'Roboto', sans-serif !important;
   
    text-align: center;
    text-decoration: none;
    
    
}
.btn-two span {
    margin-left: -10px;
    z-index: 2; 
    display: block;
    position: absolute;
    width: 100%;
    height: 100%; 
    }
.btn-two::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  transition: all 0.5s;
  /* border: 1px solid #fff; */
  background-color: darkgreen;
  border-radius: 10px;
}
.btn-two::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  transition: all 0.5s;
  /* border: 1px solid #fff; */
  background-color: darkgreen;
  border-radius: 10px;
}
.btn-two:hover::before {
  transform: rotate(-45deg);
  background-color: red;
 
}
.btn-two:hover::after {
  transform: rotate(45deg);
  background-color: red;
  
}








            /*///////////////MEDIA QUERYS////////////////////////////////////////////////////////////////////*/

@media(max-width: 480px)        /*para ecras mais pequenos*/
{
    body{
        overflow:visible;
        background-image: cover;
        /* min-width: 100vw; */
        /* text-align: center; */
       /* align-content: center;
        /*display: flex;          /*coloca tudo em linha*/
       /* flex-direction: column; /*coloca tudo em coluna*/
       /* align-items: center;    /*alinha horizontalmente*/
        /* justify-content: center;/*alinha tudo verticalmente com uso de height:100vh*/
        background-size: cover;

    }

   

 

    .nav-item{
        padding: 10px !important;

    }
  

  
    footer 
    {
        display: none;
    };

}

@media (max-width: 800px)
{
    body{
        overflow:visible;
        background-image: cover;
    }

        
    .{
                background-color: darkgreen;
                color:rgb(0, 0, 0);
                margin: 5px;
                border-radius: 10px;
                padding-left: 10px;
                font-weight: 700;
                text-align: center;
            }
 

    .nav-item{
        padding: 10px !important;

    }


    footer 
    {
        display: none;
    };
  

}

@media (max-width : 600px)
{
    body{
        overflow:visible;
        background-image: cover;
    }

        
    .{
                background-color: darkgreen;
                color:rgb(0, 0, 0);
                margin: 5px;
                border-radius: 10px;
                padding-left: 10px;
                font-weight: 700;
                text-align: center;
            }
 

    .nav-item{
        padding: 10px !important;

    }


    footer 
    {
        display: none;
    };
  

}
    
        
        </style>
    </head>
    <body class="antialiased">


      


        <div class="menu-login">
              <!-- Right Side Of Navbar -->
              <ul class="">
                <!-- Authentication Links -->
                <nav class="minha-nav text-white navbar navbar-expand-lg navbar-dark ">

                @guest
               
                @else

        
                    @switch(Auth::user()->role)
                        @case(1)
                                <a class=" m-3 navbar-brand minha-nav roletag" href="/">NÍVEL: ALUNO</a>
                            @break
                        @case(2)
                            <a class=" m-3 navbar-brand minha-nav roletag" href="/">NÍVEL: PROFESSOR</a>
                            @break
                        @case(3)
                            <a class=" m-3 navbar-brand minha-nav roletag" href="/">NÍVEL: ADMINISTRADOR</a>
                            @break
                        @default
                            
                    @endswitch
                    <li class="nav-item2 dropdown"
                    style =""
                
                
                >
                    <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class=" dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">


                        {{-- <a class="dropdown-item" href="{{ route('register') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            REGISTAR
                        </a> --}}

                           <div class="input-group form-group menu2 " >

                            @if (Auth::user()->role == 3)

                                @if (Route::has('register'))
                
                                <a class="dropdown-item"  
                                
                                    href="{{ route('register') }}">{{ __('Registar novo user') }}</a>
                
                                <a class="dropdown-item"  
                                
                                    href="/usersmanager">Gestão Users</a>

                                <a class="dropdown-item"  
                                
                                    href="/salas">Salas</a>
                            
                                @endif
                                
                            @endif
                               

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                            </div>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                   
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav">

                        @if (Auth::user()->role > 0)

                       <!-- Hover #1 -->


                       
                        <div class="box-1">
                            <a  href="{{ asset('alunos')}}" >
                                <div class="btn btn-two">
                                    <span>  Alunos </span>
                                </div>
                            </a>
                        </div>
                       


                        <div class="box-1">
                            <a  href="{{ asset('notas ') }}">
                                <div class="btn btn-two">
                                    <span>Notas</span>
                                </div>
                            </a> 
                        </div>
                        
                        <div class="box-1">
                            <a  href="{{ asset('cursos ') }}">
                                <div class="btn btn-two">
                                    <span>Cursos</span>
                                </div>
                            </a>
                        </div>
                        
                   
                                
                                @if (Auth::user()->role>1)
                                                              
                                <div class="box-1">
                                    <a  href="{{ asset('professores') }}">
                                        <div class="btn btn-two">
                                            <span>Professores</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="box-1">
                                    <a  href="{{ asset('turmas ') }}">
                                        <div class="btn btn-two">
                                            <span> Turmas</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="box-1">
                                    <a  href="{{ asset('disciplinas ') }}">
                                        <div class="btn btn-two">
                                            <span> Disciplinas</span>
                                        </div>
                                    </a>
                                </div>
                                        
                            
                                @endif
                                @if (Auth::user()->role>2)
                                    
                                    
                                    
                                @endif
                    
                        @endif

                     
                      </div>
                    
                    </div>
                    
                   
                  </nav>

                  <div class="text-center">
                    <form action="{{ route('search') }}" method="GET">
                        {{ csrf_field() }}
                        <input type="text" name="search" required/>
                        <button type="submit" class="btn-procurar">Procurar</button>
                    </form>
                   </div>


                @endguest
            </ul>
        </div>
        {{-- <div class=" overflow-hidden justify-center min-vh-100 bg-gray-100 dark:bg-gray-900 sm:items-center"> --}}
        <div class=" overflow-hidden justify-center bg-gray-100 dark:bg-gray-900 sm:items-center principal">
            
            @yield('content')

         
        </div>
     
    <!-- Optional JavaScript; choose one of the two! -->


    {{-- <div class="text-center fixed-bottom"> --}}
        <div>
         @include('layouts.footer')
    </div>



 </body>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>
