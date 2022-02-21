<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Aluno;
use App\Models\Turma;
use App\Models\Disciplina;
use App\Models\professor_turma;
use App\Models\Cursos_turma;
use App\Models\Curso_disciplinas;
use App\Http\Requests\StoreCursoRequest;
use App\Http\Requests\UpdateCursoRequest;
use Illuminate\Http\Request;

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
    public function show(Curso $curso)
    {
        $alunos = Aluno::where('id_curso', $curso->id)->get();
        // $curso_nome = Curso::where('id', $id)->pluck('nome');
        
        
        // $skips = ["[","]","\""];
        // $curso_nome = str_replace($skips, ' ',$curso_nome);

        $cursos_turma = Cursos_turma::where('id_curso',$curso->id)->get();
        

        $curso_disciplinas = Curso_disciplinas::where('id_curso',$curso->id)->get();

        $arr_subjs = array();

        foreach ($curso_disciplinas as $cd){
                $dis = Disciplina::where('id',$cd->id_disciplina)->get();
                foreach ($dis as $d){
                    array_push($arr_subjs,$d);
                }
        }



        // $x=$curso->curso_disciplina_curso()->where('id',);
     

        // dd(get_defined_vars());
             
        return view ('cursos.show', compact('alunos','cursos_turma','curso_disciplinas','curso','arr_subjs'));
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

    public function curso_disciplinas(Curso $curso){

        $disciplinas = Disciplina::all();
        return view('cursos.atualizaDisciplinas',compact('curso','disciplinas'));
    }

    public function disciplina_save(Request $request,Curso $curso)
    {

        $x = $curso->curso_disciplina_curso()->where('id_disciplina',$request->input('disciplina'))->get();
        // $x = $curso->curso_disciplina_curso()->get();
        // $y = $professore->prof_turmas_prof()->where('professor_id',$professore->id)->get();
   
        $message ="Disciplina já está atribuida!";
        if ( count($x) == 0) {
            $curso->curso_disciplina_disciplina()->attach($request->input('disciplina'));
            $message="Disciplina Registada";
           
        }
        // dd(get_defined_vars());
       
        return redirect('/cursos')->with ('message', $message);
                    
    }
}
