<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AlumnoController extends BaseController
{
    public function  __construct()
    {
        $this->middleware('auth');
     //   $this->middleware('isAdmin');
      //  $this->middleware('role');
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        return view ('alumno.datos_one');
    }
}
