<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="PT-pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- <title>{{ env('APP_NAME') }} v{{ env('APP_V') }}</title> --}}
        <title> E.N.O.S. HR&copy;  &rAarr; v1.2 </title>


        {{-- <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#000;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#000;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Latest compiled and minified CSS -->
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> --}}

<!-- Latest compiled and minified JavaScript -->
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script><script src="scripts/jquery-3.2.1.js"></script> --}} 
        <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}

{{-- 
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}


    <!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
        

     <!--Fontawesome CDN-->
	{{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> --}}

    <script src="//code.jquery.com/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
 




        <style>


            /*BODY E PRINCIPAL/////////////////////////////////////////////////////////////////////////////*/
            html,body{
                background-image: url('https://cdn.pixabay.com/photo/2015/04/01/11/08/sillouette-702178_960_720.jpg');
                background-size: cover;
                /* background-repeat: no-repeat; */
                height: 100%;
                font-family: 'Numans', sans-serif;
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
                transform: scale(1.2);
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
         

            /*BOTOÕES/////////////////////////////////////////////////////////////////////////////*/
     

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
                margin: 10px;
                border-radius: 5px;
                font-size: 26px; 
                float:left; 
            }
 

            .meuBtn{
                font-weight: 900;
                font-family: 'Consolas',sans-serif;
                font-size: 2.5rem !important;
                border: none;
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
                text-align: right;
                padding: 3px;
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
                background-color: cyan;
                border-radius: 5px;
                text-align: center;
                padding: 3px;
                color:#000;
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
          
            /*///////////////ESPECIAIS////////////////////////////////////////////////////////////////////*/

            .especial-id-turma{
                background-color: darkblue;
                text-align: center;
            }
            .especial-id-turma:hover{
                background-color: green;
                
                text-align: center;
            }


            /*///////////////MEDIA QUERYS////////////////////////////////////////////////////////////////////*/

@media(max-width: 480px)        /*para ecras mais pequenos*/
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
                    @if (Route::has('login'))
                        {{-- <li class="nav-item"> --}}
                            {{-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> --}}
                        {{-- </li> --}}
                    @endif

                    @if (Route::has('register'))
                        {{-- <li class="nav-item"> --}}
                            {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Registar') }}</a> --}}
                        {{-- </li> --}}
                    @endif
                @else

        

     


                    <a class=" m-3 navbar-brand minha-nav" href="/">ENOS HR &copy;</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav">
                        <a class="nav-item nav-link "   href="{{ asset('alunos')}}">Alunos </a>
                        <a class="nav-item nav-link "  href="{{ asset('professores') }}">Professores</a>
                        <a class="nav-item nav-link "  href="{{ asset('cursos ') }}">Cursos</a>
                        <a class="nav-item nav-link "   href="{{ asset('disciplinas ') }}">Disciplinas</a>
                        <a class="nav-item nav-link "   href="{{ asset('notas ') }}">Notas</a>
                        <a class="nav-item nav-link "   href="{{ asset('turmas ') }}">Turmas</a>
                      </div>
                    </div>
                    
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                  </nav>
             
              


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
