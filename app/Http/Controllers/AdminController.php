<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

        if ($id != 1){

            $user = User::where('id', $id);
            $user->delete();
            // dd(get_defined_vars());
            return redirect('/usersmanager')->with ('message', 'User apagado!');

        }
        else {
            return redirect('/usersmanager')->with ('message', 'Não pode apagar o administrador');
        }
        
    }
}
