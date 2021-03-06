<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use App\Models\Aluno;
use App\Models\Disciplina;
use App\Models\Curso;
use App\Http\Requests\StoreNotaRequest;
use App\Http\Requests\UpdateNotaRequest;

class NotaController extends Controller
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

        
        // $todas_as_notas = Nota::all();
        $todas_as_notas = Nota::paginate(20);
        // $todas_as_notas = Nota::orderBy('nota','DESC')->get();
        
        // $alunos = Aluno::all();
        $alunos = Aluno::orderBy('nome', 'ASC')->get();
        

        $disciplinas = Disciplina::all();
        // $disciplinas = Disciplina::orderBy('nome')->get();
        // dd(get_defined_vars()) ;
        return view('notas.index', compact('todas_as_notas','alunos','disciplinas'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aluno = Aluno::all()->pluck('nome','id');
        $disciplina = Disciplina::all()->pluck('nome','id');
        return view('notas.create',compact('aluno','disciplina'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNotaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNotaRequest $request)
    {
        $this->validate($request, [
            'nota'=>'required|integer|max:20',
        
        ],
        [
            'nota.required' => 'Preencha a nota!',    
            'nota.integer' => 'Tem de ser um número',                 
            'nota.max' => 'Máximo é 20 sr. professor...',    
        ]);
        // dd($this);
        $nota = new Nota;
        $nota->nota=$request->input('nota');
       
        $nota->id_aluno=$request->input('aluno');
        $nota->id_disciplina=$request->input('disciplina');
        $nota->save();

        return redirect ('/notas')->with('message','Nota registada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show(Nota $nota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function edit(Nota $nota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNotaRequest  $request
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNotaRequest $request, Nota $nota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nota = Nota::where('id', $id);
      
        $nota->delete();
       
        return redirect('/notas')->with ('message', 'Nota apagada!');
    }
}
