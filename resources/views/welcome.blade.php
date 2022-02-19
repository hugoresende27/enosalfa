@extends('layouts.app')

@section('content')
    <style>

        /*CSS LOGIN ///////////////////////////////////////////////////////////////////////////////////////////// */

        /* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

/* html,body{
background-image: url('https://cdn.pixabay.com/photo/2015/04/01/11/08/sillouette-702178_960_720.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
} */

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}


        /*CSS LOGIN ///////////////////////////////////////////////////////////////////////////////////////////// */

        body{
            /* background-image: url('https://cdn.pixabay.com/photo/2015/11/05/08/21/geometry-1023846_960_720.jpg'); */
            /* background-image: url('https://cdn.pixabay.com/photo/2016/06/13/07/59/pi-1453836_960_720.jpg'); */
            /* background-image: url('https://cdn.pixabay.com/photo/2017/10/01/14/14/street-2805643_960_720.jpg');
            background-repeat: no-repeat;
            background-size: cover; */
        }

        .menu{
                
              
                text-align: center;
                align-content: center;
               display: flex;          /*coloca tudo em linha*/
                flex-direction: column; /*coloca tudo em coluna*/
                align-items: center;    /*alinha horizontalmente*/
                 justify-content: center;/*alinha tudo verticalmente com uso de height:100vh*/
                
                
            }
            ul li{
                /* margin: 20px; */
            }

        
             a:hover{
                text-decoration: none;
                color: #fff;
                
            }
            .btn-heros{
                width: 100%;
                /* display:inline-flex; */
                padding: 10px;
                margin: 10px ;
                text-align: center;
                border-radius: 5px;
                font-size:1.5rem;
                
            }
        

            .btn-heros:hover{
                background-color: #fff;
                color: darkgreen;
            }

            .verde{
                background-color: darkgreen;
            }
            .vermelho{
                background-color: darkred;
            }


            footer{
            /* display: none; */
            }

        

    </style>




      

            @guest

          



                <div class="container">
                    <div class="d-flex justify-content-center h-100">
                        <div class="card">
                            <div class="card-header">
                                <h3 class=" display-4">Enos Escola</h3>
                                
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="input-group form-group" style="text-align: center; margin:10px padding:20px">
                                      
                                        @if (Route::has('login'))
                    
                                        <a class="btn-heros verde meuBtn"  
                                            
                                            href="{{ route('login') }}">{{ __('Login') }}</a>
                                
                                        @endif
                                        
                                    </div>
                                        {{-- <div class="input-group form-group"  style="text-align: center; margin:10px; padding:20px">
                                            @if (Route::has('register'))
                        
                                            <a class="btn-heros vermelho meuBtn"  
                                            
                                                href="{{ route('register') }}">{{ __('Registar') }}</a>
                                        </div>
                                            @endif --}}
                                    
                                </form>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <div class="dados">
                    <table class="table ">
                        <thead>
                          <tr class="text-center">
                            <th scope="col" class="text-center">email</th>
                            <th scope="col" class="text-center">password</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                         
                            <td>admin@admin</td>
                            <td>admin</td>
                          
                          </tr>
                          <tr>
                         
                            <td>prof@prof</td>
                            <td>prof</td>
                          
                          </tr>
                          <tr>
                         
                            <td>aluno@aluno</td>
                            <td>aluno</td>
                          
                          </tr>
                          
                        </tbody>
                      </table>
                 
                    
               

                </div>
            @endguest
        
        
       
        @auth
    

            <div class="menu">
                <h1 class="titulo-inicial titulo-topo">Sistema E.N.O.S.</h1>

     {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
     @if (session()->has('message'))
     <div class="text-white">
         <p class="delete">
             {{ session()->get('message') }}
         </p>
     </div>
    @endif
      

                <img class="fundo" 
                src="https://cdn.pixabay.com/photo/2015/11/05/08/21/geometry-1023846_960_720.jpg" 
                      alt="welcome">

   
            </div>
        @endauth
        
@endsection          
 
