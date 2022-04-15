<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index(){
        return view('signup');
    }

    public function store(Request $request){
                // validation 
                $this->validate($request, [
                    'name' => 'required|max:255',
                    'username' => 'required|max:255',
                    'email' => 'required|email|max:255',
                    'password' => 'required|confirmed'
                ]);
                
                // store the user
                User::create([
                    'name' => $request->name,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
                ]);
                
                // sign the user in
                auth()->attempt($request->only('email', 'password'));
                
                // redirect
                return redirect()-> route('login'); 
    }
}
