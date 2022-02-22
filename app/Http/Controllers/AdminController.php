<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index()
    {
        $users = User::all();

        return view ('admin.index', compact('users'));
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
