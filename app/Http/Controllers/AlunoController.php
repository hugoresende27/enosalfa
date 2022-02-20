<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Turma;
use App\Models\Disciplina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use App\Http\Requests\StoreAlunoRequest;
use App\Http\Requests\UpdateAlunoRequest;
use Illuminate\Contracts\Auth\Guard;

class AlunoController extends Controller
{

    public function __construct()
    {
  
        $this->middleware('auth');
    }

    
    


    public function check_role(){
        $user = Auth::user();
        return $user->role;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        
        // $alunos = Aluno::orderBy('created_at','DESC')->get();
        // $alunos = Aluno::orderBy('nome')->get();
        $alunos = Aluno::paginate(10);
        
        $curso = Curso::all();
       
        

        $turmas = Turma::all();
     

        // dd(get_defined_vars()) ;
        return view ('alunos.index',compact('alunos','curso','turmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $cursos = Curso::all()->pluck('nome','id');
        $turma = Turma::all()->pluck('id','id');
        // $salas = Sala::all();
          
  
        return view('alunos.create',compact('cursos','turma'));
     
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
            'telefone'=>'required|integer',
            // 'turma'=>'required',
            'sala'=>'required',
            // 'curso'=>[new minhaValidation],'integer','min:1'
            
            
        ],
        [
            'nome.required' => 'Preencha o nome!',
            'morada.required' => 'Preencha a morada!',
            'email.required' => 'Preencha o email!',
            'email.email' => 'email tem de ser válido!',
            'telefone.required' => 'Preencha o telefone!',
            'telefone.integer' => 'Número de telefone inválido!',
            'sala.required' => 'Preencha a sala!',
         
        ]);
      
        $aluno = new Aluno;
        $aluno->nome=$request->input('nome');
        $aluno->morada=$request->input('morada');
        $aluno->email=$request->input('email');
        
        $aluno->telefone=$request->input('telefone');
        
        $aluno->sala=$request->input('sala');
        $aluno->idade=$request->input('data_nascimento');
        $aluno->id_curso=$request->input('curso');
        $aluno->id_turma=$request->input('turma');
        $aluno->save();

        return redirect ('/alunos')->with('message','Aluno registado');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {


        
        //chamar aqui a function 'alunos' do modelo Curso BELOGNSTO
        $curso = Curso::with('alunos')->where('id', $aluno->id_curso)->first();

        $anoAtual = now();

        $data =  new \DateTime($aluno->idade);

        $x = $data->diff($anoAtual)->format("%y");

        $disc = Disciplina::all();
        
        $nota = Nota::where('id_aluno', $aluno->id)->get();
     
        return view ('alunos.show', compact('aluno','curso','x','disc','nota'));

      
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = Auth::user();
      
        if ($user->role > 1){

        
            $turmas = Turma::all();
            $cursos = Curso::all();
            $aluno = Aluno::find($id);

            // dd(get_defined_vars());

            // return view('alunos.update')->with('aluno',$aluno);
        return view('alunos.update', compact('aluno','turmas','cursos'));
        }
        else{
          return redirect ('/alunos')->with('message','NÃO AUTORIZADO');
        }

        // $cursos = Curso::all();
        // $turma = Turma::all();
        // dd(get_defined_vars());
        // return view('alunos.update', compact('aluno','cursos','turma'));
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
        $this->validate($request, [
            'nome'=>'required',
            'morada'=>'required',
            'email'=>'required|email',
            'telefone'=>'required|integer',
            'sala'=>'required',
            
            
        ],
        [
            'nome.required' => 'Preencha o nome!',
            'morada.required' => 'Preencha a morada!',
            'email.required' => 'Preencha o email!',
            'email.email' => 'email tem de ser válido!',
            'telefone.required' => 'Preencha o telefone!',
            'telefone.integer' => 'Número de telefone inválido!',        
            'sala.required' => 'Preencha a sala!',
          
        ]);

        $guarda = Aluno::where('id',$aluno->id)
            ->update([
                'nome'=>$request->input('nome'),
                'morada'=>$request->input('morada'),
                'email'=>$request->input('email'),
                'telefone'=>$request->input('telefone'),
                'idade'=>$request->input('data_nascimento'),
                'sala'=>$request->input('sala'),
                'id_curso'=>$request->input('curso'),
                'id_turma'=>$request->input('turma'),
            ]);

        return redirect ('/alunos/'.$aluno->id)->with('message','Registo Atualizado');
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

    public function aluno_turmas(Aluno $aluno){

        $turmas = Turma::all();
        return view('alunos.atualizaTurmas',compact('aluno','turmas'));
    }

    public function turmas_save(Request $request, Aluno $aluno){

        $guarda = Aluno::where('id',$aluno->id)
            ->update([
               
                'id_turma'=>$request->input('turma'),
            ]);


        return redirect('/alunos/'.$aluno->id)->with ('message', 'Turma atualizada');
    }

    
    
}


use Illuminate\Contracts\Validation\Rule;
class minhaValidation implements Rule
{

   

    public function passes($attribute, $value)
    {
        $numCursos = Curso::count();
        return $value<$numCursos;
    }
    public function message()
    {
        return 'Curso não válido';
    }
}