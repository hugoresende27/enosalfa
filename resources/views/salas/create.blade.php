@extends('layouts.app')

@section('content')

<div class="container p-3" style="margin:20px">

  <h1 class="text-white text-center display-4 tag-tit1">ADICIONAR SALAS</h1>
   {{-- SE HOUVER MENSAGEM MOSTRA AQUI ---------------- --}}
 @if (session()->has('message'))
 <div class="text-white"  id='hideMe'>
     <p class="delete">
         {{ session()->get('message') }}
     </p>
 </div>
@endif
{{-- {{ dd($message) }} --}}

  
@if (Auth::user()->role >2)

    

        

            <div class="form-group display-6 text-center">
                
               <form action="create" method="POST">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="nome">
                        {{ __('Nome da sala') }}
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded"
                           type="text"
                           id="nome"
                           name="nome"
                           value=""
                           required>
                </div>
               <div class="mb-6">
                   <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                          for="lugares">
                       {{ __('Lugares') }}
                   </label>
                   <input class="w-full p-2 border border-gray-400 rounded"
                          type="number"
                          id="lugares"
                          name="lugares"
                          value=""
                          required>
               </div>
               <div class="mb-6">
                   <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                          for="aquecimento">
                       {{ __('Aquecimento') }}
                   </label>
                   <select class="w-full p-2 border border-gray-400 rounded"
                          
                          id="aquecimento"
                          name="aquecimento"
                        
                          required>
                        <option value="1">SIM</option>
                        <option value="0">NÃO</option>
                        </select>
               </div>
               <div class="mb-6">
                   <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                          for="internet">
                       {{ __('Internet') }}
                   </label>
                   <select class="w-full p-2 border border-gray-400 rounded"
                          
                          id="internet"
                          name="internet"
                          
                          required>
                        <option value="1">SIM</option>
                        <option value="0">NÃO</option>
                        </select>
               </div>
               <div class="mb-6">
                   <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                          for="janelas">
                       {{ __('Janelas') }}
                   </label>
                   <select class="w-full p-2 border border-gray-400 rounded"
                          
                          id="janelas"
                          name="janelas"
                          
                          required>
                        <option value="1">SIM</option>
                        <option value="0">NÃO</option>
                        </select>
               </div>
               <button type="submit"
               class="float-right meuBtn text-white m-3"
               > Registar </button>

               </form>

            </div>
        


   
    @else
            
    <h1 class="text-center text-uppercase" style="background-color:red; font-family: 'Consolas'; color:#fff;font-size:5rem;">ACESSO VEDADO</h1>
    @endif 
    
@endsection