<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;
use App\Http\Requests\StoreAlunoRequest;
use App\Http\Requests\UpdateAlunoRequest;
use Illuminate\Support\Facades\Schema;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $alunos = Aluno::orderBy('created_at','DESC')->get();
       
        $curso = Curso::all()->pluck('nome');
        // $curso = Curso::with('aluno')->get();
        // $x = new Curso();
        // $x->aluno()->get();
        // dd($curso);
       
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
            'morada'=>'required',
            'email'=>'required|email',
            'telefone'=>'required',
            'turma'=>'required',
            'sala'=>'required',
            'curso'=>'required|integer',
        ],
        [
            'nome.required' => 'Preencha o nome!',
            'morada.required' => 'Preencha a morada!',
            'email.required' => 'Preencha o email!',
            'email.email' => 'email tem de ser válido!',
            'telefone.required' => 'Preencha o telefone!',
            'turma.required' => 'Preencha a turma!',
            'sala.required' => 'Preencha a sala!',
            'curso.required' => 'Preencha o curso!',
            'curso.integer' => 'Curso tem de ser um número de curso',
        ]);
        // dd($this);
        $aluno = new Aluno;
        $aluno->nome=$request->input('nome');
        $aluno->morada=$request->input('morada');
        $aluno->email=$request->input('email');
        
        $aluno->telefone=$request->input('telefone');
        $aluno->turma=$request->input('turma');
        $aluno->sala=$request->input('sala');
        $aluno->idade=$request->input('data_nascimento');
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
        $curso = Curso::where('id_aluno', $id)->get();
        $tudo = Aluno::where('id', $id)->get();
        $aluno_nome = Aluno::where('id', $id)->pluck('nome');
        $skips = ["[","]","\""];
        $aluno_nome = str_replace($skips, ' ',$aluno_nome);
        
        
        
        // $columns = Schema::getColumnListing('alunos');
        foreach($tudo as $teste){
            $data =  new \DateTime($teste->idade);
            // $data2 = strtotime($data);
            $anoAtual = now();
            // $anos = $anoAtual - $data;  
            $x = $data->diff($anoAtual)->format("%y");
        }
        
        // dd($data->format('Y'));
        // dd($x);


        return view ('alunos.show', compact('curso','aluno_nome','tudo','x'));
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
