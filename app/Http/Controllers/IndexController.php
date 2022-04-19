<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $cvs = Cv::all();
        return view('index', ['cvs'=>$cvs]);
    }
}
