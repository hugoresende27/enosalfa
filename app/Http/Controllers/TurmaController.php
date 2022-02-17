<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use App\Models\Professor;
use App\Models\Curso;
use App\Models\Aluno;
use App\Models\professor_turma;
use App\Http\Requests\StoreTurmaRequest;
use App\Http\Requests\UpdateTurmaRequest;

class TurmaController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth', ['except' => ['index', 'show']]);
        $this->middleware('auth');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos_os_cursos = Curso::all();
       
        $todas_as_turmas = Turma::orderBy('id')->get();

        return view('turmas.index',compact('todas_as_turmas','todos_os_cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $todos_os_cursos = Curso::all()->pluck('nome','id');
        // dd($todos_os_cursos);
        return view ('turmas.create',compact('todos_os_cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTurmaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTurmaRequest $request)
    {
        

        $turma = new Turma;
        $turma->id_curso=$request->input('curso_escolhido');

        $turma->save();

       
    
      

        return redirect ('/turmas')->with('message','Turma registada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function show(Turma $turma)
    {

        // $alunos = Aluno::where('id_turma', $turma->id);
        $alunos = Aluno::all();
        return view('turmas.show', compact('turma','alunos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function edit(Turma $turma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTurmaRequest  $request
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTurmaRequest $request, Turma $turma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tur = Turma::where('id', $id);
      
        $tur->delete();
       
        return redirect('/turmas')->with ('message', 'Turma apagada!');
    }
}
