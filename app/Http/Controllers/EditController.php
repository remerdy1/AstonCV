<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cv;

class EditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $email = auth()->user()->email;
        $cv = Cv::where('email', $email)->get();

        return view('editcv', ['cv'=>$cv]);
    }

    public function update(Request $request){
        $this->validate($request, [
            'name' => 'required|max:100',
            'keyprogramming' => 'required|max:255',
            'profile' => 'required|max:500',
            'education' => 'required|max:500',
            'URLlinks' => 'required|max:500',
        ]);

        $email = auth()->user()->email;
        $cv = Cv::where('email', $email);
        $cv->update(['name'=>$request->name, 'keyprogramming'=>$request->keyprogramming, 'education'=>$request->education,'profile'=>$request->profile, 'URLlinks'=>$request->URLlinks]);
        
        return redirect(route('index'));
    }
}
