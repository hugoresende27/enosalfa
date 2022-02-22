<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Turma;
use App\Models\Sala;
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

    
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        
        $alunos = Aluno::orderBy('created_at','DESC')->paginate(10);
        // $alunos = Aluno::orderBy('nome')->get();
        // $alunos = Aluno::paginate(10);
        
        $curso = Curso::all();
       
        $turmas = Turma::all();
     
        $salas = Sala::all();



        // dd(get_defined_vars()) ;
        return view ('alunos.index',compact('alunos','curso','turmas','salas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $cursos = Curso::all()->pluck('nome','id');
        // $turma = Turma::all()->pluck('id','id');
        // $salas = Sala::all();
          
  
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
            'telefone'=>'required|integer',
  
            
            
        ],
        [
            'nome.required' => 'Preencha o nome!',
            'morada.required' => 'Preencha a morada!',
            'email.required' => 'Preencha o email!',
            'email.email' => 'email tem de ser válido!',
            'telefone.required' => 'Preencha o telefone!',
            'telefone.integer' => 'Número de telefone inválido!',
       
         
        ]);
      
        $aluno = new Aluno;
        $aluno->nome=$request->input('nome');
        $aluno->morada=$request->input('morada');
        $aluno->email=$request->input('email');
        
        $aluno->telefone=$request->input('telefone');
        
       
        $aluno->idade=$request->input('data_nascimento');
        $aluno->id_curso=$request->input('curso');
        
       

        // $turma_sala = Turma::where('id_curso',$request->input('curso'))->pluck('sala_id');
        // dd(get_defined_vars());
        // $sala = Sala::where('id')

        // $aluno->sala_id=$turma_sala;
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
        $tot_notas = count($nota);
        $media = 0;
        foreach ($nota as $n){
            $media += $n->nota;
        }
        if ($media != 0) $media = $media / $tot_notas;
        $media = round($media,2);

        //chamr aqui a função 'aluno' do model Sala HASONE
        $sala = Sala::with('aluno')->where('id', $aluno->sala_id)->pluck('nome');

        $skips = ["[","]","\""];
        $sala = str_replace($skips, ' ',$sala);
     
        // dd(get_defined_vars());
        return view ('alunos.show', compact('aluno','curso','x','disc','nota','sala','media'));

      
     
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
         
        ],
        [
            'nome.required' => 'Preencha o nome!',
            'morada.required' => 'Preencha a morada!',
            'email.required' => 'Preencha o email!',
            'email.email' => 'email tem de ser válido!',
            'telefone.required' => 'Preencha o telefone!',
            'telefone.integer' => 'Número de telefone inválido!',        
         
        ]);

        $guarda = Aluno::where('id',$aluno->id)
            ->update([
                'nome'=>$request->input('nome'),
                'morada'=>$request->input('morada'),
                'email'=>$request->input('email'),
                'telefone'=>$request->input('telefone'),
                'idade'=>$request->input('data_nascimento'),
                
                'id_curso'=>$request->input('curso'),
                'id_turma'=>null,
            ]);

       

        return redirect ('/alunos')->with('message','Registo Atualizado');
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


        $input = (int)$request->input('turma');
        
        $sala_aluno = Turma::where('id',$input)->first();
        
        
        $sala = $sala_aluno->sala_id;
        $curso = $sala_aluno->id_curso;
       
        // dd(get_defined_vars());
        $guarda = Aluno::where('id',$aluno->id)
            ->update([
               
                'id_turma'=>$request->input('turma'),
                'sala_id'=> $sala,
                'id_curso' =>$curso
            ]);
        

        return redirect('/alunos/')->with ('message', 'Turma atualizada');
    }

    // public function search(Request $request){
    //     // Get the search value from the request
    //     $search = $request->input('search');
    
    //     // Search in the title and body columns from the posts table
    //     $results = Aluno::query()
    //         ->where('nome', 'LIKE', "%{$search}%")
    //         // ->orWhere('body', 'LIKE', "%{$search}%")
    //         ->get();
    //     // dd(get_defined_vars());
    //     // Return the search view with the resluts compacted
    //     return view('alunos.search', compact('results'));
    // }

    
    
}





// use Illuminate\Contracts\Validation\Rule;
// class minhaValidation implements Rule
// {

   

//     public function passes($attribute, $value)
//     {
//         $numCursos = Curso::count();
//         return $value<$numCursos;
//     }
//     public function message()
//     {
//         return 'Curso não válido';
//     }
// }