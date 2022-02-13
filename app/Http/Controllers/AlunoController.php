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
        // dd($alunos);
        return view ('alunos.index')->with('alunos',$alunos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alunos.create');
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
        $cursos = Curso::where('id_aluno', $id)->get();
        $aluno = Aluno::where('id', $id)->pluck('nome');
        // dd($id);
        return view ('alunos.show', compact('cursos','aluno'));
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
