<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index(){
        return view('signup');
    }

    public function store(Request $request){
       
        // validation 
        $this->validate($request, [
            'name' => 'required|max:100',
            'email' => 'required|email|max:100',
            'password' => 'required|max:255|confirmed',
            'keyprogramming' => 'required|max:255',
            'profile' => 'required|max:500',
            'education' => 'required|max:500',
            'URLlinks' => 'required|max:500',
        ]);
        
        // store the user
        Cv::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'keyprogramming' => $request->keyprogramming,
            'profile' => $request->profile,
            'education' => $request->education,
            'URLlinks' => $request->URLlinks  
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        // sign the user in
        auth()->attempt($request->only('email', 'password'));
        
        // redirect
        return redirect()-> route('index'); 
    }
}
