<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
