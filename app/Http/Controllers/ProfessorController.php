<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\Disciplina;
use App\Models\Turma;
use App\Models\professor_turma;
use App\Http\Requests\StoreProfessorRequest;
use App\Http\Requests\UpdateProfessorRequest;
use Carbon\Carbon;


class ProfessorController extends Controller
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
            'morada'=>'required',
            'email'=>'required|email',
            'telefone'=>'required|integer',      
        ],
        [
            'nome.required' => 'Preencha o nome!',      
            'email.required' => 'Preencha o email!',
            'email.email' => 'email tem de ser válido!',
            'telefone.required' => 'Preencha o telefone!',
            'telefone.integer' => 'Número de telefone inválido!',       
        ]);

        $prof = new Professor;
        $prof->nome=$request->input('nome');

        $prof->morada=$request->input('morada');
        $prof->email=$request->input('email');       
        $prof->telefone=$request->input('telefone');
        $prof->idade=$request->input('data_nascimento');


        $prof->id_disciplina=$request->input('disciplinas');
      
        $prof->push();
     


       
        return redirect ('/professores')->with('message','Professor registado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */


    public function show( $id)
    // public function show(Professor $professor)
    {

        // dd(get_defined_vars());
      
        
        $professor = Professor::where('id',$id)->get();
        $anoAtual = now();

        foreach($professor as $item){
            $data = new \DateTime($item->idade);
            
            $data2 = new Carbon($item->idade);


            $nome = $item->nome;
            $morada = $item->morada;
            $email = $item->email;
            $telefone = $item->telefone;
            $id_disc = $item->id_disciplina;
            $created_at = $item->created_at;
            $updated_at = $item->updated_at;
           
        }
        
        $disciplina = Disciplina::where('id',$id_disc)->first();
        $x = $data->diff($anoAtual)->format("%y");

        $turmas = professor_turma::all();
        
        // dd(get_defined_vars());
       
        return view ('professores.show', compact('disciplina','x','id', 'nome', 'morada', 'email','data','telefone','data2','turmas','created_at','updated_at'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function edit(Professor $professore)
    {

        $disciplinas = Disciplina::all();
        // $disciplina = Disciplina::findOrFail($professore->id);

        // dd($disciplina->id);
        return view ('professores.update', compact ('disciplinas','professore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfessorRequest  $request
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfessorRequest $request, Professor $professore)
    {
        $this->validate($request, [
            'nome'=>'required',
            'morada'=>'required',
            'email'=>'required|email',
            'telefone'=>'required|integer',
             
        ],
        [
            'nome.required' => 'Preencha o nome!',      
            'email.required' => 'Preencha o email!',
            'email.email' => 'email tem de ser válido!',
            'telefone.required' => 'Preencha o telefone!',
            'telefone.integer' => 'Número de telefone inválido!',     
     
        ]);

        $guarda = Professor::where('id',$professore->id)
            ->update([
                'nome'=>$request->input('nome'),
                'morada'=>$request->input('morada'),
                'email'=>$request->input('email'),
                'telefone'=>$request->input('telefone'),
                'idade'=>$request->input('data_nascimento'),
                'id_disciplina'=>$request->input('disciplinas')
            ]);
            
        // dd(get_defined_vars());

        return redirect ('/professores')->with('message','Registo Atualizado');
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
