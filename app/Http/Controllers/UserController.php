<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function store(Request $request){
 
        $request->validate([
        'name' => ['required', 'string', 'max:191'],
        'username' => ['required', 'unique:users','max:191'],
        'phone'=> ['required'],
        'email' => ['required', 'string', 'email', 'max:191', 
        'unique:users'],
        'password' => ['required', 'string', 'min:6','max:191', 
        'confirmed'],
        ]);
       $userreg = new User([
        'name' => $request->get('name'),
        'username'=> $request->get('username'),
        'phone'=> $request->get('email'),
        'password' => Hash::make($request['password']),
        ]);
       $email = $request->get('email');
       $data = ([
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'username' => $request->get('username'),
        'phone' => $request->get('phone'),
        ]);
       Mail::to($email)->send(new WelcomeMail($data));
        
        $userreg->save();
        
        flash('User has been added!','success')->important();
       return back();
       }
}
