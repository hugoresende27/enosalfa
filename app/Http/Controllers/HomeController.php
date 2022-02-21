<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Nota;
use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Turma;
use App\Models\Professor;
use App\Models\Sala;
use App\Models\Disciplina;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
        $user = Auth::user();
        return $next($request);
        });
        // dd(get_defined_vars());
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = Auth::user();
        return view('welcome', compact('user'));
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $results1 = Aluno::query()
            ->where('nome', 'LIKE', "%{$search}%")
            // ->orWhere('body', 'LIKE', "%{$search}%")
            ->get();
        $results2 = Professor::query()
            ->where('nome', 'LIKE', "%{$search}%")        
            ->get();
        $results3 = Sala::query()
            ->where('nome', 'LIKE', "%{$search}%")        
            ->get();
        $results4 = Disciplina::query()
            ->where('nome', 'LIKE', "%{$search}%")        
            ->get();

        $collection = collect([$results1,$results2,$results3,$results4]);
        $count = 0;
        foreach ($collection as $item) {
            $count += count($item);
        }
       
       
        // dd(get_defined_vars());
        // Return the search view with the resluts compacted
        return view('search', compact('collection','count'));
    }
}
