<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('programs');
    }
    public function detail(){
       return view('program_detail');
    }
}
