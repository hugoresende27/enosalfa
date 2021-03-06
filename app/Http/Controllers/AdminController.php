<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\AllMails;


class AdminController extends Controller
{
    //
    public function __construct()
    {
  
        $this->middleware('auth');
    }
    
    public function index()
    {
        $users = User::all();

        return view ('admin.index', compact('users'));
    }

    public function infos()
    {

        $mails = AllMails::all();

        return view ('admin.infos',compact('mails'));
    }

    public function destroy($id)
    {
        // $user = User::where('id', $id);
        $user = User::where('id', $id)->first();
        // $auth = Auth::user()->where('id',$id)->first();
        $auth = Auth::user()->toArray();
        // dd(get_defined_vars());

        if ($id == 1){

            return redirect('/usersmanager')->with ('message', 'Não pode apagar o administrador');
           

        }
        else {
            if ($id != $auth['id'] ){
                $user->delete();
                // dd(get_defined_vars());
                return redirect('/usersmanager')->with ('message', 'User apagado!');
            }
            else {
                return redirect('/usersmanager')->with ('message', 'Não pode apagar a sua propria conta');
            }
          
        }
        
    }
}
