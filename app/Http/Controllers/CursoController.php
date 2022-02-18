<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Aluno;
use App\Models\professor_turma;
use App\Models\Cursos_turma;
use App\Http\Requests\StoreCursoRequest;
use App\Http\Requests\UpdateCursoRequest;

class CursoController extends Controller
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
           
            
        ],
        [
            'nome.required' => 'Preencha o nome!',
         
            
            
        ]);

        $curso = new Curso;
        $curso->nome=$request->input('nome');
    
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
        $curso_nome = Curso::where('id', $id)->pluck('nome');
        
        // dd($alunos);
        $skips = ["[","]","\""];
        $curso_nome = str_replace($skips, ' ',$curso_nome);

        $cursos_turma = Cursos_turma::where('id_curso',$id)->get();
      
        // dd(get_defined_vars());        
        return view ('cursos.show', compact('alunos','curso_nome','id','cursos_turma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {

        // dd(get_defined_vars());
        return view ('cursos.update', compact('curso'));
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
        $this->validate($request, [
            'nome'=>'required',
         
        ],
        [
            'nome.required' => 'Preencha o nome!',  
          
        ]);

        $guarda = Curso::where('id',$curso->id)
            ->update([
                'nome'=>$request->input('nome'),         
            ]);

        return redirect ('/cursos')->with('message','Registo Atualizado');
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
