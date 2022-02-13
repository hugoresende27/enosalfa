<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Aluno;
use App\Http\Requests\StoreCursoRequest;
use App\Http\Requests\UpdateCursoRequest;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index')->with('cursos',$cursos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCursoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCursoRequest $request)
    {
        $this->validate($request, [
            'nome'=>'required',
            'disciplinas'=>'required',
            // 'id_curso'=>'required|integer',
            
        ],
        [
            'nome.required' => 'Preencha o nome!',
            'disciplinas.required' => 'Preencha as disciplinas!',
            // 'id_curso.required' => 'Preencha o curso!',
            // 'id_curso.integer' => 'ID tem de ser um número',
            
            
        ]);

        $curso = new Curso;
        $curso->nome=$request->input('nome');
        $curso->disciplinas=$request->input('disciplinas');
        // $curso->id_curso=$request->input('id_curso');
    //    dd($curso);
        $curso->save();

        return redirect ('/cursos')->with('message','Curso registado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $alunos = Aluno::where('id_curso', $id)->get();
        $curso = Curso::where('id', $id)->pluck('nome');

        $skips = ["[","]","\""];
        $curso = str_replace($skips, ' ',$curso);
        return view ('cursos.show', compact('alunos','curso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCursoRequest  $request
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCursoRequest $request, Curso $curso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cur = Curso::where('id', $id);
        // dd($cur->id);
        $cur->delete();
        
        return redirect('/cursos')->with ('message', 'Curso apagado!');
    }
}
