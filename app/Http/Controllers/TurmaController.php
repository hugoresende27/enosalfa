<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use App\Models\Professor;
use App\Models\Curso;
use App\Models\Aluno;
use App\Models\Sala;
use App\Models\professor_turma;
use App\Models\Cursos_turma;
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

        $sala = Sala::with('turma')->pluck('nome');

        // dd($sala);

        return view('turmas.index',compact('todas_as_turmas','todos_os_cursos','sala'));
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

        
        $curso_turma = new Cursos_turma;
        $curso_turma->id_curso=$request->input('curso_escolhido');
        $curso_turma->id_turma=$turma->id;

        $curso_turma->save();

     
    
      
       
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
        $curso = Curso::where('id',$turma->id_curso)->get();
        // $alunos = Aluno::all();
        $alunos = Aluno::where('id_turma', $turma->id)->get();

        // dd(get_defined_vars());
        return view('turmas.show', compact('turma','alunos','curso'));
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
