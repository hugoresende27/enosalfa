<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\Disciplina;
use App\Models\Turma;
use App\Http\Requests\StoreProfessorRequest;
use App\Http\Requests\UpdateProfessorRequest;
use Carbon\Carbon;


class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $disciplina = Disciplina::all();
        $turmas = Turma::all();
        $profs = Professor::orderBy('created_at','DESC')->get();
        // dd($disciplina);
        return view('professores.index', compact('disciplina','profs','turmas'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $disciplinas = Disciplina::all()->pluck('nome','id');
        return view ('professores.create',compact('disciplinas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfessorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfessorRequest $request)
    {
        $this->validate($request, [
            'nome'=>'required',         
        ],
        [
            'nome.required' => 'Preencha o nome!',             
        ]);

        $prof = new Professor;
        $prof->nome=$request->input('nome');
        $prof->id_disciplina=$request->input('disciplinas');
      
        $prof->save();

        return redirect ('/professores')->with('message','Professor registado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {

        // dd(get_defined_vars());
        $disciplina = Disciplina::with('professor')->where('id', $id)->first();
        $professor = Professor::where('id',$id)->get();
        $anoAtual = now();

        foreach($professor as $item){
            $data = new \DateTime($item->idade);
            
            $data2 = new Carbon($item->idade);


            $nome = $item->nome;
            $morada = $item->morada;
            $email = $item->email;
            $telefone = $item->telefone;
           
        }
        
       
        $x = $data->diff($anoAtual)->format("%y");

        
        // dd(get_defined_vars());
       
        return view ('professores.show', compact('disciplina','x','id', 'nome', 'morada', 'email','data','telefone','data2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function edit(Professor $professor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfessorRequest  $request
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfessorRequest $request, Professor $professor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
              
        $prof = Professor::where('id', $id);
      
        $prof->delete();
       
        return redirect('/professores')->with ('message', 'Registo do professor apagado!');
    }
}
