<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;
use App\Http\Requests\StoreAlunoRequest;
use App\Http\Requests\UpdateAlunoRequest;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $alunos = Aluno::all();
       
        $curso = Curso::all()->pluck('nome');
       
        return view ('alunos.index',compact('alunos','curso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $cursos = Curso::all()->pluck('nome','id');
          
    //    dd($cursos);
        return view('alunos.create',compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAlunoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlunoRequest $request)
    {
        $this->validate($request, [
            'nome'=>'required',
            'turma'=>'required',
            'sala'=>'required',
            'curso'=>'required|integer',
        ],
        [
            'nome.required' => 'Preencha o nome!',
            'turma.required' => 'Preencha a turma!',
            'sala.required' => 'Preencha a sala!',
            'curso.required' => 'Preencha o curso!',
            'curso.integer' => 'Curso tem de ser um número de curso',
        ]);

        $aluno = new Aluno;
        $aluno->nome=$request->input('nome');
        $aluno->turma=$request->input('turma');
        $aluno->sala=$request->input('sala');
        $aluno->id_curso=$request->input('curso');
        $aluno->save();

        return redirect ('/alunos')->with('message','Aluno registado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        // $curso = Curso::where('id_aluno', $id)->get();
        $curso = Curso::all();
        $aluno = Aluno::where('id', $id)->pluck('nome');
        $skips = ["[","]","\""];
        $curso = str_replace($skips, ' ',$curso);
        dd($curso);
        return view ('alunos.show', compact('curso','aluno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlunoRequest  $request
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlunoRequest $request, Aluno $aluno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $alu = Aluno::where('id', $id);
      
        $alu->delete();
       
        return redirect('/alunos')->with ('message', 'Registo do aluno apagado!');
  
    }

    
}
