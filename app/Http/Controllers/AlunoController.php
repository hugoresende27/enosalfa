<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;
use App\Http\Requests\StoreAlunoRequest;
use App\Http\Requests\UpdateAlunoRequest;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;

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
        // $alunos = Aluno::with('cursos')->get();
        
        $curso = Curso::all()->pluck('nome');
        // $x = new Curso();
        // $curso= $x->aluno();
        // $curso = Curso::where('id');
        // $curso = Curso::with('aluno')->get();
        // $x = new Curso();
        // $x->aluno()->get();
        // dd($x);
        // dd(get_defined_vars());
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
            // 'curso'=>[new minhaValidation],'integer','min:1'
            
            
        ],
        [
            'nome.required' => 'Preencha o nome!',
            'morada.required' => 'Preencha a morada!',
            'email.required' => 'Preencha o email!',
            'email.email' => 'email tem de ser válido!',
            'telefone.required' => 'Preencha o telefone!',
            'turma.required' => 'Preencha a turma!',
            'sala.required' => 'Preencha a sala!',
            // 'curso.required' => 'Preencha o curso!',
            // 'curso.integer' => 'Curso tem de ser um número de curso',
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
    public function show(Aluno $aluno)
    {

        //$aluno = $aluno;
        // {{ dd(get_defined_vars()) ; }}
        

        $curso = Curso::with('alunos')->where('id', $aluno->id_curso)->first();

        $anoAtual = now();

        $data =  new \DateTime($aluno->idade);

        $x = $data->diff($anoAtual)->format("%y");
        // dd($x);
        // {{ dd(get_defined_vars()) ; }}
        return view ('alunos.show', compact('aluno','curso','x'));

      
        // $id = $id->id_curso;
        
        
        /*
        $tudo = Aluno::where('id', $id)->get();


        $aluno_nome = Aluno::where('id', $id)->pluck('nome');
        $skips = ["[","]","\""];
        // dd($curso);
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

   
        // $last = \DB::table('alunos')
        //           ->join('cursos', 'cursos.id', '=', 'alunos.id_curso')
        //           ->get();
        // $last = \DB::table('cursos')
        //           ->join('alunos', 'id_curso', '=', 'cursos.id')
        //           ->where('cursos.id','=','alunos.id_curso')
        //           ->get();
        // $last = \DB::table('alunos')
        //           ->join('cursos', 'cursos.id', '=', 'alunos.id_curso')
        //           ->where('alunos.id_curso','cursos.id')
        //           ->get();

        $last2 = Aluno::where('id_curso');
        // $last = Curso::where('id',Aluno::where('id_curso'));
        $last = Curso::with('alunos')->where('id', );
      
        // dd($lastOperationUser);

        //$someVariable = Input::get("some_variable");
        //$todos = Aluno::all()->pluck('id_curso');
      
        // $results = \DB::select( \DB::raw("SELECT nome FROM cursos WHERE id = '$x'") );
        //  $results = \DB::select( \DB::raw("SELECT 'nome' from  cursos
        //  where 'cursos.id'='alunos.id_curso'") );
        // dd($results);
        //$armies = Curso::with('aluno')->get();

        //  dd(get_defined_vars()) ;

     

        return view ('alunos.show', compact('aluno_nome','tudo','x','last'));
        */
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