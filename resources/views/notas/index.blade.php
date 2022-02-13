@extends('layouts.app')

@section('content')

<div class="container p-3" style="margin:20px">
    <a href="/" class="btn-inicial" style="background-color: red">Voltar</a>
    
    <a href="/notas/create" class="btn-inicial" style="background-color: green">Adicionar</a>

    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Aluno</th>
        
            
            <th scope="col">Disciplina</th>
            <th scope="col">Nota</th>
            
            <th scope="col">EDITAR</th>
            <th scope="col">APAGAR</th>
          </tr>
        </thead>
        <tbody>
         
            
          <tr>
            <td>aluno_aqui</td>
            <td>disciplina_aqui</td>
           
            
            <td>nota_aqui</td>
     
            <td><a href="">Editar </a></td>
    
    
            <td>
                
                <form action="" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit"
                            class="border-b-2  border-dotted italic text-red-200"
                            > Apagar </button>
    
                </form>
    
            </td>
            
          </tr>
    
      
        </tbody>
      </table>
    </div>    
    
@endsection