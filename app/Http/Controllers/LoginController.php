<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function store(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email|max:100',
            'password' => 'required|max:255',
        ]);
 
        if (Auth::attempt($credentials)) {
            return redirect()->route("index");
        }else{
            return back()->withInput()->with('status', 'Invalid login details');
        }
    }
}
