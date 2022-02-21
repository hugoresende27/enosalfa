<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;

class SalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $salas = Sala::all();
        // dd(get_defined_vars());
        return view ('salas.index', compact('salas'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome'=>'required',
            'lugares'=>'required|integer|min:1',
            'aquecimento'=>'required',
            'internet'=>'required',
            'janelas'=>'required',
                   
        ],
        [
            'nome.required' => 'Preencha o nome!',
            'lugares.min' => 'Preencha os lugares com um número válido!',
            'lugares.required' => 'Preencha os lugares!',
            'lugares.integer' => 'Preencha os lugares com um número!',
            
       
        ]);
        
        $sala = new Sala;
        $sala->nome=$request->input('nome');
        $sala->lugares=$request->input('lugares');
        $sala->aquecimento=$request->input('aquecimento');
        $sala->internet=$request->input('internet');
        $sala->janelas=$request->input('janelas');

        $sala->save();

        return redirect ('/salas')->with('message','Sala registada');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sala $sala)
    {
        // $sala = Sala::where('id',$id);
        return view ('salas.update', compact('sala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sala $sala)
    {
        $this->validate($request, [
            'nome'=>'required',
            'lugares'=>'required|integer|min:1',
            'aquecimento'=>'required',
            'internet'=>'required',
            'janelas'=>'required',
                   
        ],
        [
            'nome.required' => 'Preencha o nome!',
            'lugares.min' => 'Preencha os lugares com um número válido!',
            'lugares.required' => 'Preencha os lugares!',
            'lugares.integer' => 'Preencha os lugares com um número!',
            
       
        ]);
        
        $save = Sala::where('id', $sala->id)->update([
            
            'nome' => $request->input('nome'),
            'lugares'=>$request->input('lugares'),
            'aquecimento'=>$request->input('aquecimento'),
            'internet'=>$request->input('internet'),
            'janelas'=>$request->input('janelas'),
            
        ]);
       

        return redirect ('/salas')->with('message','Sala Atualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sala = Sala::where('id', $id);
        // dd(get_defined_vars());
        $sala->delete();
       
        return redirect('/professores')->with ('message', 'Sala apagada!');
    }
}
