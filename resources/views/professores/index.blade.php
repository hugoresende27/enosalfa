@extends('layouts.app')

@section('content')

<div class="container p-3" style="margin:20px">
    <a href="/" class="btn-inicial" style="background-color: red">Voltar</a>

    <a href="/professores/create" class="btn-inicial" style="background-color: green">Adicionar</a>

    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            
            <th scope="col">Disciplinas</th>
            
            <th scope="col">EDITAR</th>
            <th scope="col">APAGAR</th>
          </tr>
        </thead>
        <tbody>
         
            
          <tr>
            <td>curso_aqui</td>
            <td>disciplina_aqui</td>
     
            <td><a href="/turmas//edit">Editar </a></td>
    
    
            <td>
                
                <form action="/turmas/" method="POST">
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