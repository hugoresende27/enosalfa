<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use App\Models\Professor;
use App\Models\Aluno;
use App\Models\Nota;
use App\Http\Requests\StoreDisciplinaRequest;
use App\Http\Requests\UpdateDisciplinaRequest;

class DisciplinaController extends Controller
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
        $disc = Disciplina::orderBy('created_at')->get();
        $profs = Professor::all();

        // dd(get_defined_vars());
        return view('disciplinas.index',compact('disc','profs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $profs = Professor::all()->pluck('nome','id');
        // dd($profs);
        return view('disciplinas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDisciplinaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDisciplinaRequest $request)
    {
        $this->validate($request, [
            'nome'=>'required',
        
        ],
        [
            'nome.required' => 'Preencha o nome!',    
        ]);
        // dd($this);
        $disc = new Disciplina;
        $disc->nome=$request->input('nome');
       
        // $disc->id_professor=$request->input('profs');
        $disc->save();

        return redirect ('/disciplinas')->with('message','Disciplina registada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function show(Disciplina $disciplina)
    {

        $todas_as_notas = Nota::where('id_disciplina',$disciplina->id)->get();
        $todos_os_alunos = Aluno::all();

        // dd(get_defined_vars());
        return view('disciplinas.show', compact('disciplina','todos_os_alunos','todas_as_notas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function edit(Disciplina $disciplina)
    {
        return view ('disciplinas.update', compact('disciplina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDisciplinaRequest  $request
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDisciplinaRequest $request, Disciplina $disciplina)
    {
        $this->validate($request, [
            'nome'=>'required',
         
        ],
        [
            'nome.required' => 'Preencha o nome!',  
          
        ]);

        $guarda = Disciplina::where('id',$disciplina->id)
            ->update([
                'nome'=>$request->input('nome'),         
            ]);

        return redirect ('/disciplinas')->with('message','Registo Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
               
        $disc = Disciplina::where('id', $id);

        $check = Professor::where('id_disciplina',$id)->pluck('nome');
        $x=count($check);
        // dd(get_defined_vars());
        if (count($check) == 0){

            $disc->delete();
       
            return redirect('/disciplinas')->with ('message', 'Disciplina apagada!');
        } else {
            return redirect('/disciplinas')->with ('message', 'Disciplina tem professor, apague primeiro o professor!');
        }
        // dd(get_defined_vars());
   
    }
}
