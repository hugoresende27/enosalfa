@extends('layouts.app')

@section('content')

<style>

    .form-update {
        text-align: left;    
    }
  

</style>


<div class="container p-3" style="margin:20px">
    {{-- <a href="/alunos" class="btn-voltar" style="background-color: red">Voltar</a> --}}

  {{-- DEBUG DE ERROS NO FORM-------------------- --}}
  @if ($errors->any())
  <div class="mostrar-erros text-white">
      <ul>
          @foreach ($errors->all() as $erro)
              <li class="">
                  {{ $erro }}                   
              </li>                 
          @endforeach
      </ul>
  </div>       
@endif
    
        <h1 class="text-center text-uppercase bg-dark" style="font-family: 'Consolas'; color:#fff;font-size:2.5rem;">EDITAR ALUNO</h1>
            {{-- <p>{{ dd(get_defined_vars()) }}</p> --}}


            <form action="/alunos/{{ $aluno->id }}" method="POST" class="form-update">
                {{-- {{ dd(get_defined_vars()) }} --}}
                @method('PUT')
                @csrf

                <label for="nome" class="m-3 p-3">Nome</label>
                <input type="text"
                        class="m-3 p-3 " 
                        name="nome"
                        id="nome"
                        value="{{ $aluno->nome }}"><br>

                        
                <label for="data" class="m-3 p-3">Data de Nascimento</label>
                <input type="date" 
                       name="data_nascimento" 
                       id="data" max="2005-12-31" 
                       class="m-3 p-3"
                       required 
                       value="{{ $aluno->idade }}"><br>


                <label for="morada" class="m-3 p-3">Morada</label>
                <input type="text"
                        class="m-3 p-3" 
                        name="morada"
                        id="morada"
                        value="{{ $aluno->morada }}"><br>

                <label for="email" class="m-3 p-3">Email</label>
                <input type="email"
                        class="m-3 p-3" 
                        name="email"
                        id="email"
                        value="{{ $aluno->email }}"><br>

                <label for="telefone" class="m-3 p-3">Telefone</label>    
                <input type="text"
                        class="m-3 p-3" 
                        name="telefone"
                        id="telefone"
                        value="{{ $aluno->telefone }}"><br>

                <label for="sala" class="m-3 p-3">Sala</label>    
                <input type="type"
                        class="m-3 p-3" 
                        name="sala"
                        id="sala"
                        value="{{ $aluno->sala }}"><br>

                {{-- <label for="turma" class="m-3 p-3">Turma</label>  
                <select name="turma" id="turma" class="m-3 p-3">
                    @foreach($turmas as $t)
                        <option selected="" value="{{ $t->id }}">{{ $t->id }}</option>
                    @endforeach
                </select><br> --}}

                <label for="curso" class="m-3 p-3">Curso</label>  
                <select name="curso" id="turma" class="m-3 p-3">
                    @foreach($cursos as $c)
                        <option selected="" value="{{ $c->id }}">{{ $c->nome }}</option>
                    @endforeach
                </select><br>

              
            
                <button type="submit" 
                        class="btn btn-primary w-75 m-3 p-3 meuBtn">
                    Atualizar
                </button>
            
            </form>

        

@endsection